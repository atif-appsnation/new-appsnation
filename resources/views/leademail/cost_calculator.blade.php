<div style="font-family: Arial, sans-serif; background: #f9f9f9; padding: 30px;">
    <div style="max-width: 600px; margin: auto; background: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); padding: 24px;">
        <h2 style="color: #2a4365; border-bottom: 2px solid #e2e8f0; padding-bottom: 10px;">Cost Calculator Submission</h2>
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <tr style="background: #f1f5f9;">
                <th style="text-align: left; padding: 8px; border-bottom: 1px solid #e2e8f0;">Field</th>
                <th style="text-align: left; padding: 8px; border-bottom: 1px solid #e2e8f0;">Value</th>
            </tr>
            <tr>
                <td style="padding: 8px;">Name</td>
                <td style="padding: 8px;">{{ $details['name'] }}</td>
            </tr>
            <tr style="background: #f9fafb;">
                <td style="padding: 8px;">Email</td>
                <td style="padding: 8px;">{{ $details['email'] }}</td>
            </tr>
            <tr>
                <td style="padding: 8px;">Mobile</td>
                <td style="padding: 8px;">{{ $details['mobile'] }}</td>
            </tr>
            <tr style="background: #f9fafb;">
                <td style="padding: 8px;">Service</td>
                <td style="padding: 8px;">{{ $details['service'] }}</td>
            </tr>
            @if(!empty($details['company']))
            <tr>
                <td style="padding: 8px;">Company</td>
                <td style="padding: 8px;">{{ $details['company'] }}</td>
            </tr>
            @endif
            @if(!empty($details['o_message']))
            <tr>
                <td style="padding: 8px;">Message</td>
                <td style="padding: 8px;">{{ $details['o_message'] }}</td>
            </tr>
            @endif
        </table>

        <h3 style="margin-top: 32px; color: #2a4365; border-bottom: 1px solid #e2e8f0; padding-bottom: 6px;">Cost Calculator Details</h3>
        <table style="width: 100%; border-collapse: collapse; margin-top: 10px;">
            @php
                $lines = preg_split('/\r\n|\r|\n/', $details['message']);
                $inSection = false;
            @endphp
            @foreach($lines as $line)
                @if(strpos($line, '=== Cost Calculator Details') !== false)
                    @php $inSection = true; @endphp
                    @continue
                @elseif(strpos($line, '=== End of Calculator Details') !== false)
                    @php $inSection = false; @endphp
                    @continue
                @endif
                @if($inSection && trim($line) !== '')
                    @php
                        preg_match('/\[(.*?)\]\s*(.*)/', $line, $matches);
                    @endphp
                    @if(count($matches) === 3)
                        <tr>
                            <td style="padding: 8px; font-weight: bold; background: #f9fafb; width: 40%;">{{ $matches[1] }}</td>
                            <td style="padding: 8px; background: #fff;">{{ $matches[2] }}</td>
                        </tr>
                    @endif
                @endif
            @endforeach
        </table>

    </div>
</div> 