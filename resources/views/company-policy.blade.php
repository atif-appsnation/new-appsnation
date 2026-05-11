@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-areav2">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container">
		<div class="row">
			<div class="col-lg-6 wow fadeIn">
				<div class="bread-inner">
					<div class="bread-title">
						<h1 class="text-white">Company Policy</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb Area-->

<!--Start Enquire Form-->
<section class="contact-page py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <p>Welcome to <strong>Appsnation</strong>., where innovation meets excellence. At <strong>Appsnation</strong>, we strive to create a dynamic and inclusive work environment that fosters growth, professionalism, and mutual respect. Our commitment to delivering cutting-edge solutions is reflected not only in our products but also in the way we nurture and support our talented team. As part of our dedication to maintaining a harmonious and productive workplace, we have established a comprehensive set of policies designed to guide our employees towards success and uphold the values that define us.</p>
                <h4 class="pt-3">Hiring Policy</h4>
                <p class="pt-3"><strong>Document Submission:</strong> Candidates must submit a comprehensive set of documents during the application process, including resumes, 1 passport size photograph , most recent educational documents,All workplace experience certificates  ( if any) and any requested certifications,Last 3 payroll,Previous company document verified.</p>
                <h4 class="pt-3">Uses of Company Equipments</h4>
                <p class="pt-3">Employees are expected to use company equipment, including computers and other technology, responsibly and in accordance with the company's policies and procedures. Misuse of company equipment may result in disciplinary action, up to and including termination. Company equipment must be used solely for intended purposes; this includes software assets such as paid plugins, purchased themes, and source code, ensuring they are not misused or utilised inappropriately.</p>
                <p class="pt-3">"If any damage is caused to the company property (Tangible and intangible), the user will be held responsible for its restoration and will be required to pay for the damages."</p>
                <h4 class="pt-3">Time and Attendance</h4>
                <p class="pt-3">Employees are required to accurately record their work hours, adhere to the agreed-upon schedule, and notify their Manager in advance of any changes. Overtime (unPaid) may be required subject to applicable laws and regulations, and time off is eligible with Manager approval. Punctuality is expected, and violations may result in disciplinary action.</p>
                <ul class="ms-4">
                    <li><p><strong>Attendance:</strong> Employees must mark their attendance on the HUB (Employee Portal) as well as the attendance machine. If an employee misses attendance for check-in, check-out, or the entire day, it should be corrected within 3 days. If not, leave will be marked after 3 days. The policy may be updated or revised by the employer as necessary.</p></li>
                    <li><p><strong>Timing:</strong> Employees must arrive at their designated shift timings, with 1-hour flexibility. If an employee arrives more than 1 hour late, it will be considered a late arrival. Three late arrivals will be considered as one absence.</p></li>
                </ul>
                <h4 class="pt-3">Leaves</h4>
                <p class="pt-3">You will also be entitled to such other allowances, which may be applicable to you from time to time as per the rules of the Company.</p>
                <p class="pt-3">You will be entitled to Earned Annual Leave 15 days ( & Maternity Leaves 40 days) after completing One Year of service. You will also be entitled to 10 days of Casual Leave and 08 days of Sick Leaves per year.</p>
                <h4 class="pt-3">Work for Home</h4>
                <p class="pt-3"><strong>Appsnation</strong> does not observe a general work-from-home policy. Work from home is applicable only for genuine reasons that require company approval. Only employees hired for remote work are authorised to work remotely. However, the company reserves the right to transition an employee from in-house work mode to remote work mode.</p>
                <h4 class="pt-3">Half Day Leave</h4>
                <p class="pt-3">For a half-day off, an employee needs to speak with HR. An employee is required to work for 4-5 hours to complete a half-day. If an employee completes their remaining hours within the month, they will be eligible for another half-day off. However, an employee can only apply for a half-day off once a month.</p>
                <h4 class="pt-3">Salary, Allowance</h4>
                <p class="pt-3">The following monthly emoluments have been fixed for you:</p>
                <ul class="ms-4">
                    <li>Basic Pay</li>
                    <li>House Rent</li>
                    <li>Utilities</li>
                    <li>Fuel</li>
                    <li>Medical</li>
                </ul>
                <p class="pt-3">Deduction:</p>
                <ul class="ms-4">
                    <li>Income Tax ( Above 5ok) as per FBR Law</li>
                    <li>PF</li>
                </ul>
                <h4 class="pt-3">Employment Benefits Policy</h4>
                <p class="pt-3">At Appsnation, we prioritise the well-being and recognition of our dedicated employees. Our comprehensive benefits package reflects our commitment to fostering a positive and rewarding work environment. Here are key points regarding our prominent employment benefits:</p>
                <ol class="ms-4">
                    <li class="pt-3">Employee of the Month
                        <ul class="ms-4">
                            <li>Recognizing outstanding contributions and dedication</li>
                            <li>Awarded based on exceptional performance and positive impact.</li>
                        </ul>
                    </li>
                    <li class="pt-3">Provident Fund
                        <ul class="ms-4">
                            <li>Financial security through a structured savings plan.</li>
                            <li>Both employee and employer contributions for long-term stability.</li>
                        </ul>
                    </li>
                    <li class="pt-3">Performance Awards
                        <ul class="ms-4">
                            <li>Merit-based rewards for exceptional achievements.</li>
                            <li>Encourages continuous improvement and excellence.</li>
                        </ul>
                    </li>
                    <li class="pt-3">Medical Insurance
                        <ul class="ms-4">
                            <li>Comprehensive health coverage for employees.</li>
                            <li>Ensures well-being and access to quality healthcare.</li>
                        </ul>
                    </li>
                    <li class="pt-3">Gratuity Fund
                        <ul class="ms-4">
                            <li>Providing financial support upon completion of service.</li>
                            <li>Reflects commitment to long-term employee welfare.</li>
                        </ul>
                    </li>
                    <li class="pt-3">Life Insurance
                        <ul class="ms-4">
                            <li>Protection for employees and their families.</li>
                            <li>Financial security in unforeseen circumstances.</li>
                        </ul>
                    </li>
                    <li class="pt-3">Training Opportunities
                        <ul class="ms-4">
                            <li>Continuous learning and skill development.</li>
                            <li>Encourages professional growth and adaptability.</li>
                        </ul>
                    </li>
                    <li class="pt-3">Annual Increment
                        <ul class="ms-4">
                            <li>Recognizing and rewarding loyalty and commitment.</li>
                            <li>Regular salary increments for sustained contributions.</li>
                        </ul>
                    </li>
                    <li class="pt-3">Bonus Policy
                        <ul class="ms-4">
                            <li>Employees are eligible for performance-based bonuses, rewarding exceptional contributions to the company's objectives, with criteria and payout structure clearly communicated.</li>
                            <li>Bonus payouts are determined based on individual or team achievements, aligning with company goals and performance metrics, fostering motivation and recognition among employees.</li>
                        </ul>
                    </li>
                </ol>
                <p class="pt-3">At Appsnation, we are dedicated to fostering a supportive and rewarding work environment, ensuring our employees thrive both personally and professionally.</p>
                <h4 class="pt-3">Dress Code</h4>
                <p class="pt-3">Professional attire: Employees should wear clothing that is appropriate for the industry and company culture. For example, formal business attire may be required for a law firm, while smart casual clothing may be acceptable in a tech startup.</p>
                <p class="pt-3">Avoidance of revealing clothing: Clothing that is revealing or provocative is not suitable for the workplace. Clothing displaying offensive language or graphics is also discouraged.</p>
                <h4 class="pt-3">Tracking Policy</h4>
                <p class="pt-3"><strong>Appsnation PVT LTD</strong>reserves the right to monitor the system, browser history, software usage, and screen activity, including web tracking if deemed necessary by the company.</p>
                <h4 class="pt-3">Grading Hierarchy</h4>
                <p>We are fortunate to work for <strong>Appsnation</strong>, an organisation that values and recognizes hard work and dedication. As an employee, you have the opportunity to grow and advance within <strong>Appsnation</strong>, and we encourage you to take advantage of this opportunity. Our grading hierarchy provides a clear path for career advancement, with each level bringing new challenges and opportunities for growth. With commitment and effort, employees can progress from an entry-level position to a leadership role. We are proud to support and invest in our employee's career development and look forward to seeing you succeed and thrive within <strong>Appsnation</strong></p>
                <h4 class="pt-3">Designations</h4>
                <h4 class="pt-3">Experience Required</h4>
                <ul class="ms-4">
                    <li>Intern: No experience required</li>
                    <li>Management Trainee: 0-1 years</li>
                    <li>Junior: 1-2 years</li>
                    <li>Mid: 2-4 years</li>
                    <li>Senior: 4-5 years</li>
                    <li>Lead: 5-7 years</li>
                    <li>Assistant President 7-9 years</li>
                    <li>Vice President: 9-11 years</li>
                    <li>President: 12-15 years</li>
                </ul>
                <h4 class="pt-3">Personal Financial Gain (At Office) Policy</h4>
                <p class="pt-3">Employees are not permitted to perform any paid work in the official of their usual responsibilities at <strong>Appsnation</strong>, with the intention of generating personal financial advantage.</p>
                <p class="pt-3">Disclosure: Workers must let their manager know about any possible conflicts of interest. As soon as an employee becomes aware of the conflict, they should disclose it. Discipline, including termination, may follow failure to disclose a conflict of interest.</p>
                <h4 class="pt-3">Sexual Harassment Workplace Policy</h4>
                <p class="pt-3">The company prohibits harassment and discrimination in the workplace on the basis of race, colour, religion, sex, national origin, age, disability, or any other legally protected characteristic. Any employee who engages in such behaviour may be subject to disciplinary action up to and including termination. </p>
                <h4 class="pt-3">Probationary Period</h4>
                <p class="pt-3">You will be on probation for a period of three months from the date of your joining. Your confirmation in the company's service is subject to your satisfactory performance during this time. The confirmation will also depend on satisfactory responses from your referees and previous employer(s). If necessary, the company may extend the probationary period in writing. However, if you perform satisfactorily, you will be confirmed as a permanent employee after the probationary period ends.</p>
                <h4 class="pt-3">General</h4>
                <ul class="ms-4">
                    <li>Your employment will be governed by the existing service rules and regulations of the company and will be subject to such change or modification in these rules and regulations as may be decided by the company from time to time.</li>
                    <li>You shall not (except so far as is necessary and proper in the ordinary course of your employment) disclose to any person any information as to the practice, dealings and affairs of <strong>Appsnation</strong> Inc, or any of it customers or as to any other matter which may come to your knowledge by reason of your employment as aforesaid.</li>
                    <li><strong>Duty Hours</strong>
                        <ul class="ms-4">
                            <li>Full-time employees are expected to work for 9 hours per day (1 Hour Break).</li>
                            <li>Part-time employees are required to work for 5 hours per day (30 Minutes Break).</li>
                        </ul>
                    </li>
                    <li class="pt-3"><strong>Working Days</strong>
                        <ul class="ms-4">
                            <li>The standard workweek is from Monday to Saturday.</li>
                            <li>Employees will be entitled to have Saturdays off, provided that their work is fully completed. The team lead or project coordinator will be authorised to assign tasks on behalf of the employee for project-related responsibilities. Additionally, if there is a shortage of attendance, arrangements will be made to ensure coverage for the employee concerned.</li>
                        </ul>
                    </li>
                    <li class="pt-3"><strong>Duration for Salary Processing</strong>
                        <ul class="ms-4">
                            <li>Salary processing will occur from the 5th to the 10th of each month.</li>
                        </ul>
                    </li>
                    <li class="pt-3"><strong>Working Period</strong>
                        <ul class="ms-4">
                            <li>The working period extends from the 1st to the 30th or 31st of each month, depending on the calendar.</li>
                        </ul>
                    </li>
                    <li class="pt-3"><strong>Special Occasion Attendance and Salary Deduction Policy</strong>
                        <ul class="ms-4">
                            <li>In order to ensure the smooth functioning of the office and to maintain productivity, it is hereby established that on days of special occasions when the office is operational, leaves taken on such days shall not be marked as special leave and shall result in a deduction of two days' salary. This policy is implemented to discourage absences on important office days and to foster a culture of responsibility and commitment among employees.</li>
                        </ul>
                    </li>
                </ul>
                <p class="pt-3">At Appsnation, we emphasise the importance of adherence to these time-related policies to maintain operational efficiency and ensure a seamless working environment for all employees.</p>
                <h4 class="pt-3">Notice Period Policy</h4>
                <ol class="ms-4">
                    <li class="pt-3">Notice Period Duration
                        <ul class="ms-4">
                            <li>Employees are required to provide a notice period of 30 calendar days before resigning.</li>
                            <li>In the event that the employee is unable to fulfil the entire 30-day notice period, the company reserves the right to deduct a prorated amount from the employee's final settlement for each day not served.</li>
                        </ul>
                    </li>
                    <li class="pt-3">Salary Payment
                        <ul class="ms-4">
                            <li>Salary & F&F for the notice period will be processed within 15 to 30 days after the completion of the notice period.</li>
                            <li>If the employee resigns in the middle of the month, the salary for the notice period will include the remaining days of the current month as well as the complete notice period.</li>
                            <li>Failure to complete the notice period will result in the deduction of a prorated amount from the final settlement.</li>
                        </ul>
                    </li>
                    <li class="pt-3">Violations and Consequences
                        <ul class="ms-4">
                            <li>If an employee fails to adhere to the notice period without valid reasons, the following consequences may apply:
                                <ul class="ms-4">
                                    <li>Non-payment of salary for the remaining notice period.</li>
                                    <li>Withholding of experience certificates and other relevant documents until the completion of the notice period.</li>
                                </ul>
                            </li>
                            <li>Any violation of the notice period may also affect the employee's eligibility for rehire.</li>
                            <li>The company has the rights to deduct the provident fund contributions and enforce penalties for any voilations.</li>
                            <li>Leave will not be entairtained during the notice period.</li>
                        </ul>
                    </li>
                    <li class="pt-3">Exceptions
                        <ul class="ms-4">
                            <li>Exceptions to the notice period may be considered in exceptional circumstances, subject to approval by the HR.</li>
                        </ul>
                    </li>
                    <li class="pt-3">Exit Formalities
                        <ul class="ms-4">
                            <li>Employees are required to complete all exit formalities, including the return of company property and handover of responsibilities, before the end of the notice period.</li>
                            <li>Failure to complete exit formalities may result in delays in the settlement process.</li>
                        </ul>
                    </li>
                </ol>
                <h4 class="pt-3">Termination of Employment</h4>
                <p class="pt-3">During the probationary period, you may terminate this employment agreement and resign by giving seven days' notice in writing or surrendering an equivalent gross salary in lieu thereof. The company may also terminate the employment agreement without assigning any reason by giving seven days' notice or immediately by paying seven days' gross salary in lieu thereof.After confirmation, you may terminate this employment agreement and resign by giving one month's notice in writing or surrendering one month's gross salary in lieu thereof. The company may terminate the employment agreement by giving one month's notice or immediately by paying one month's gross salary in lieu thereof.</p>
                <p class="pt-3">If it is discovered at any stage that you have willfully withheld any material information about yourself, such as educational qualifications or age, or if statements made by you at any stage were untrue, you will be liable to dismissal from company service immediately. In that event, the company may claim damages from you.</p>
                <p class="pt-3">You may be dismissed from the company service without notice or salary in lieu thereof if you are found guilty of any act(s) of misconduct as defined in the rules.</p>
                <h4 class="pt-3">Changes to Policy</h4>
                <p class="pt-3">The Software Company reserves the right to modify this policy at any time, with or without notice.</p>
            </div>
        </div>
    </div>
</section>
<!--End Enquire Form-->

@endsection