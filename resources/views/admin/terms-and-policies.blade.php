@extends('layouts.admin')
@section('content')
<div class="manage-title">
        <h2>Terms of Service & Privacy Policies</h2>
    </div>
                    <!-- pwdi po kaya edi? pero yan na po yung terms and policies  -->
    <div class="terms-container">
        <div class="terms-wrapper">
            <!-- update button -->
            <div>
                <button type="button">Update</button>
            </div>
                <h3>Terms of Service</h3>
                <div class="service-container">
                    <span><strong>Rentalytics </strong>' major goal is to give Tarlac City's <strong>renters</strong> and <strong>landlords</strong> a single forum for communication and business dealings. The Tarlac Tourism Office will manage the system.</span>
                    <p>by using Rentalytics, you agree to the following terms of service:</p>
                    <ul>
                        <li>• You must be at least <strong>18 years old</strong> to use Rentalytics.</li>
                        <li>• You must provide accurate and up-to-date information about yourself.</li>
                        <li>• You must not use Rentalytics for illegal or unauthorized purposes.</li>
                        <li>• You must not use Rentalytics to harass or bully other users.</li>
                        <li>• You must not post or transmit any content that is offensive, harmful, or discriminatory.</li>
                    </ul>
                </div>
                <h3>Privacy Policies</h3>
                <div class="policies-container">
                    <p>When you use the service, Rentalytics records information about you, including your name, email address, and contact details. We employ this data to both deliver the service you've requested and enhance it. Except as required to deliver the service, we never sell or otherwise disclose the information that you supply to us.</p>
                    <br>
                    <p>We take measures to protect against unauthorized access, use, and disclosure of your information and we treat it with confidentiality. You have the right to seek access to your information and the correction of any errors. Additionally, you have the option to ask us to remove your data.</p>
                </div>
                <h3>Changes to Terms of service and Privacy Policy</h3>
                <div class="policies-container">
                    <p>We may change the terms of service and privacy policy from time to time. You will be notified of any changes by email or by posting the changes on the Rentalytics website.</p>
                    <br>
                    <p>By continuing to use Rentalytics after changes have been made to the terms of service and privacy policy, you agree to the new terms.</p>
                </div>
        </div>
    </div>


@endsection