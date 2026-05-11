<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Models\Lead;

class CostCalculatorController extends Controller
{
    public function submit(Request $request)
    {
        try {
            // Validate the request
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'mobile' => 'required|string|max:20',
                'message' => 'required|string',
                'selected_inputs_data' => 'required|string'
            ]);

            // Get the form data
            $formData = $request->all();
            
            // Decode selected inputs
            $selectedInputs = json_decode($formData['selected_inputs_data'], true);
            
            // Format selected inputs for message
            $calculatorDetails = "\n\n=== Cost Calculator Details ===\n\n";
            $calculatorDetails .= "[Business Type] " . ($selectedInputs['business'] ?? 'N/A') . "\n";
            $calculatorDetails .= "[Platform] " . ($selectedInputs['platform'] ?? 'N/A') . "\n";
            $calculatorDetails .= "[Audience] " . ($selectedInputs['audience'] ?? 'N/A') . "\n";
            $calculatorDetails .= "[Features] " . ($selectedInputs['features'] ?? 'N/A') . "\n";
            $calculatorDetails .= "[Integrations] " . ($selectedInputs['integrations'] ?? 'N/A') . "\n";
            $calculatorDetails .= "[Revenue] " . ($selectedInputs['revenue'] ?? 'N/A') . "\n";
            $calculatorDetails .= "[Security] " . ($selectedInputs['security'] ?? 'N/A') . "\n";
            // $calculatorDetails .= "[Money Saved] " . ($selectedInputs['money_saved'] ?? 'N/A') . "\n";
            // $calculatorDetails .= "[Time Saved] " . ($selectedInputs['time_saved'] ?? 'N/A') . "\n";
            // $calculatorDetails .= "[Project Timeline] " . ($selectedInputs['project_timeline'] ?? 'N/A') . "\n";
            $calculatorDetails .= "\n=== End of Calculator Details ===\n";

            // Combine original message with calculator details
            $combinedMessage = $formData['message'] . $calculatorDetails;

            // Save to leads table
            Lead::create([
                'name' => $formData['name'],
                'email' => $formData['email'],
                'mobile' => $formData['mobile'],
                'message' => $combinedMessage,
                'service' => 'Cost Calculator',
                // 'status' => 'New'
            ]);

            // Prepare details for email

            // Get first 8 words of the message
            $firstWords = implode(' ', array_slice(explode(' ', strip_tags($formData['message'])), 0, 8));
            $subject = 'Cost Calculator Inquiry';
            if (!empty($firstWords)) {
                $subject .= ': ' . $firstWords . (str_word_count($formData['message']) > 8 ? '...' : '');
            }

            $details = [
                'name' => $formData['name'],
                'email' => $formData['email'],
                'mobile' => $formData['mobile'],
                'service' => 'Cost Calculator',
                'company' => $formData['company'] ?? '',
                'subject' => $subject,
                'message' => $combinedMessage,
            ];

            // Send email to admin
            // Mail::to(config('talha.arif@appsnation.co', 'talha.arif@appsnation.co'))->send(new \Amail.admin_emailtails));
            // Send thank you email to user
            Mail::to('sales@appsnation.co')
                ->send(new \App\Mail\CostCalculatorMail($details));

            return redirect('/')->with('success', 'Thank you for your submission! We will contact you soon.');
            // return "yesss";
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation Error:', $e->errors());
            return redirect()->route('cost-calculator')->with('error', 'Please fill in all required fields correctly.');
// return $e->getMessage();
        } catch (\Exception $e) {
            Log::error('Cost Calculator Error:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return redirect()->route('cost-calculator')->with('error', 'An error occurred while processing your request. Please try again.');
// return $e->getMessage();
        
        }
    }
} 