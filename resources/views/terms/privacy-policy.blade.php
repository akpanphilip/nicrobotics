<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{asset('images/logo2.png')}}">
    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <title>Privacy Policy | NicRobotics</title>
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid d-flex justify-content-center">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{asset('images/logo2.png')}}" alt="">
                <p>NicRobotics</p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <div class="container">
        <div class="sectionTab">
            <div class="row termsBtn">
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="linkBox">
                        <a class="btn" href="{{ route('terms') }}">Terms and conditions</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="linkBox">
                        <a class="btn active" href="{{ route('privacyPolicy') }}">Privacy Policy</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="linkBox">
                        <a class="btn" href="{{ route('serviceAgreement') }}">Services agreement</a>
                    </div>
                </div>
            </div>
            <p class="headText">Privacy Policy</p>
            <p class="lastUpdated">Last updated: September 20, 2021</p>
            <p class="secText">Hereby is described the practice of collecting and processing of personal data provided by persons (you)
                accessing a website <a class="text-primary" href="http://www.nicrobotics.com">www.nicrobotics.com</a> (the <span class="text-light">Site</span>) or App.</p>
            <p class="secText">
                We inform you that the provisions of this Privacy Policy are subject to the up-to-date edition of the
                Regulation (EU) 2016/679 of the European Parliament and of the Council of 27 April 2016 on the
                protection of natural persons with regard to the processing of personal data and on the free movement of
                such data (hereinafter <span class="text-light">GDPR</span>), available at <a href="https://eur-lex.europa.eu/eli/reg/2016/679/oj">https://eur-lex.europa.eu/eli/reg/2016/679/oj</a>
            </p>
            <ol class="termList">
                <li>INTRODUCTION</li>
                <p>
                    1.1 We understand the importance of protection of your privacy and personal data and commit a lot of
                    effort to develop and maintain high standards of internal security measures and technologies to
                    provide you with secure processing and storage of the data we collect from you; and protect your
                    data against unauthorized or unlawful processing and against accidental loss, destruction or damage.
                </p>
                <p>
                    1.2 This Privacy Policy is an integral part of our Terms and Conditions (the <span class="text-light">Terms</span> ). As a general
                    rule, all definitions are used within the meaning established by the Terms, unless otherwise
                    specified herein.
                </p>
                <li>CONSENT</li>
                <p>
                    2.1 By using the Site, the App, and/or accepting our <a href="{{route('terms')}}">Terms</a> and <a href="{{route('serviceAgreement')}}">Service Agreement</a> (the <span class="text-light">Agreement</span> ),
                    you consent to the collection, processing and receipt of your personal data, as described in this
                    Privacy Policy.
                </p>
                <li>PERSONAL DATA WE COLLECT AND OBJECTIVE</li>
                <p>
                    3.1 We do not collect any data that may identify you without your permission. We follow the
                    principle of data minimization, meaning that we only collect and use data that is required to
                    accomplish the task relevant for provision of the Services.
                </p>
                <p>
                    3.2 The Company requires you to register in order to use the Services. However, when you access the
                    Site or the App, we may collect and further process the following categories of data:
                </p>
                <p class="in-1">
                    3.2.1 Your email address and ID of the account at different brokage platform. These are the only
                    parameters that we send directly to our server;
                </p>
                <p class="in-1">
                    3.2.2 Data, which we may collect through automated means. Through your use of the Site, we may also
                    monitor and collect tracking information related to usages such as access date and time, device
                    identification, operating system, browser type and IP address. This information may be obtained
                    directly by the Company or through third-party services;
                </p>
                <p class="in-1">
                    3.2.3 Data provided by you when referring your queries to the Company.
                </p>
                <p>
                    3.3 Pay attention that we use Google Analytics on our Site for analysis and improvement of the
                    website performance. If you want to know more about Google Analytics service and its “do not track”
                    policy, please visit <a href="https://www.google.com/analytics/terms/us.html">https://www.google.com/analytics/terms/us.html</a>
                </p>
                <p>
                    3.4 we neither solicit, nor collect personal data from anyone under the age of 18 or under the legal
                    age of your country if it is higher. If you are below 18 or you are not of legal age in your
                    country, do not provide us with any personal data.
                </p>
                <p>
                    3.5 The term we keep the personal data you provide depends on the type of information, the purpose
                    of its use, nature of sensitiveness, etc. To the general rule, we will retain your personal data for
                    the length of time reasonably needed to fulfill the purposes outlined in this Privacy Policy, unless
                    a longer retention period is required or permitted by law. We will also retain and use your
                    information for as long as necessary to resolve disputes and/or enforce our rights and agreements.
                </p>
                <p>
                    3.6 We collect and process the aforementioned data to fulfill our obligations and realize legitimate
                    interest before you, namely to:
                </p>
                <p class="in-1">
                    3.6.1 Provide access to the Site;
                </p>
                <p class="in-1">
                    3.6.2 Inform on any changes and updates to the services we provide;
                </p>
                <p class="in-1">
                    3.6.3 Comply with applicable legislation;
                </p>
                <p class="in-1">
                    3.6.4 Maintain actions in relation to legal claims;
                </p>
                <p class="in-1">
                    3.6.5 Provide additional or supportive services, as well as perform surveys, statistical analysis;
                </p>
                <p class="in-1">
                    3.6.6 To ensure marketing activities (send you news, updates, promotions, product information, event
                    announcements, and other).
                </p>
                <p class="in-1">
                    3.6.7 Improve the performance and functionality of our services as described in the Terms (the
                   <span class="text-light">Services</span> ).
                </p>
                <p>
                    3.7 The above list may be extended depending on the development of the services.
                </p>
                <li>PROCESSING OF YOUR PERSONAL DATA</li>
                <p>
                    4.1 Your personal data may be received and processed:
                </p>
                <p>
                    4.2 It is your responsibility to check the Terms from time to time during your use of the
                    Services. If you do not accept the modified version of the Terms, you shall immediately
                    cease using the Services.
                </p>
                <p class="in-1">
                    4.1.1 By the Company within our internal systems of processes compliant to technical and
                    organizational measures in a manner that meets applicable requirements of the applicable
                    legislation, GDPR, and security standards; and/or
                </p>
                <p class="in-1">
                    4.1.2 By outsourcing service providers and processors who access and use the data only to the extent
                    required to perform the obligations subcontracted to them by the Company (the <span class="text-light">Subprocessors</span>).
                </p>
                <p>
                    4.2 Those Sub processors perform tasks on our behalf and are contractually obliged not to disclose
                    or use collected information for any other purposes, other than specified in this Policy, and may
                    storage and assistance in the facilitation of technical aspects of our services or performance of
                    functions related to the administration of services (collection and analysis) or other indicated
                    under contractual closes.
                </p>
                <p>
                    4.3 You give your explicit consent that the Company may on its own discretion to engage Sub
                    processors, who comply with technical and organizational measures in a manner that meet applicable
                    requirements of the applicable legislation and GDPR and security standards implied under this
                    Privacy Policy and also the policies used in the Company.
                </p>
                <p>
                    4.4 If such Sub processors are outside of the Swiss Confederation or the European Union or European
                    Economic Area, the processing of personal data is done or will be done in accordance with applicable
                    laws and will provide the same or equal protection of user data as stated in the app’s privacy
                    policy and required by applicable guidelines of application distribution platforms.
                </p>
                <p>
                    4.5 Sub processors remain fully liable for their acts and omissions and all obligations
                    subcontracted to them. The Company is not responsible in the event that information is disclosed as
                    a result of a breach or security lapse by any such Sub processors, or for such Sub processors`
                    non-compliance with the foregoing requirements.
                </p>

                <li>INCIDENTS NOTIFICATION</li>
                <p>
                    5.1 If the Company becomes aware of any breach of our security leading to the accidental or unlawful
                    destruction, loss, alteration or unauthorized disclosure of, or access to (excluding unsuccessful
                    attempts or activities) your personal data on systems managed or otherwise controlled by us we will
                    notify you promptly and without undue delay and in compliance to the procedure prescribed under
                    applicable legislation and GDPR.
                </p>
                <p>
                    5.2 The notification will be made to your email address. It is you sole responsibility to provide us
                    with the email address and ensure that this email address is valid and current.
                </p>
                <p>
                    5.3 None of the data incidents notification from the Company may not be and will not be construed as
                    an acknowledgment of any fault or liability with respect to data incidents by us.
                </p>

                <li>YOUR SECURITY COMMITMENTS</li>
                <p>
                    6.1 You agree that without prejudice to our security measures and data incidents that it is your
                    responsibility to make appropriate use of our Services to ensure a level of security appropriate to
                    the risk in respect of your personal data and securing your system and devices which you use to
                    access the Site.
                </p>
                <p>
                    6.2 We are not obliged to protect your personal data that you choose to store or transfer outside
                    the Company and our Sub processors’ systems.
                </p>

                <li>
                    YOUR RIGHTS IN RESPECT TO PERSONAL DATA
                </li>
                <p>
                    7.1 You have the following rights in relation to your personal data:
                </p>
                <p class="in-1">
                    7.1.1. <span class="text-light">Right to access</span>
                    you have the right to obtain from us information as to whether your personal data is being
                    processed, and, where that is the case, access such personal data.
                </p>
                <p class="in-1">
                    7.1.2 <span class="text-light">Right to withdraw consent</span>
                    when we rely on your consent for the processing of your personal data, you have the right to
                    withdraw your consent at any time. However, the withdrawal of your consent will not affect the
                    lawfulness of the Company’s processing based on consent acting prior to the withdrawal.
                </p>
                <p class="in-1">
                    7.1.3 <span class="text-light">Right to rectification</span>
                    you have the right on the accuracy of your personal information. For this purpose, you are obliged
                    to notify us of any changes to the personal data that you have provided to us by sending us a
                    request to rectify your personal data where you believe the personal data we have is inaccurate or
                    incomplete.
                </p>
                <p class="in-1">
                    7.1.4 <span class="text-light">Right to restriction of processing</span>
                    you have the right to ask us to stop processing your personal data at any time.
                </p>
                <p class="in-1">
                    7.1.5 <span class="text-light">Right to erasure</span>
                    Asking us to delete all of your personal data will result in the Company deleting your personal data
                    without undue delay (unless there is a legitimate and legal reason why we are unable to delete
                    certain of your personal data, in which case we will inform you of this). Asking us to stop
                    processing your personal data or deleting your personal data will likely mean that you are no longer
                    able to use our Services.
                </p>
                <p class="in-1">
                    7.1.6 <span class="text-light">Right to data portability</span>
                    You have the right to request that the Company provides you with a copy of all of your personal data
                    and to transmit your personal data to another data controller in a structured, commonly used and
                    machine-readable format, where it is technically feasible for us to do so and the processing is
                    based on consent or contractual performance.
                </p>
                <p class="in-1">
                    7.1.7 <span class="text-light">Right to complain</span>
                    you have the right to lodge a complaint to our responsible person designated in our internal
                    regulations or to the authorized body, all contacts for the submissions specified herein below.
                </p>
                <p>
                    7.2 We will not ordinarily charge you in respect of any requests we receive to exercise any of your
                    rights detailed above, however, if you make excessive, repetitive or manifestly unfounded requests,
                    we may charge you a reasonable fee taking into account the administrative costs in order to process
                    such requests or we may refuse to act on such requests.
                </p>
                <p>
                    7.3 You may also send a request to receive the information which has been processed, amended,
                    deleted or locked and information about any parties to which we transmit your personal data.
                </p>
                <p>
                    7.4 In some cases, we may charge a fee based on our reasonable costs, if the requests are excessive
                    considering the nature of the request itself or nature and functionality of our services.
                </p>
                <li>COOKIE & SIMILAR TECHNOLOGIES</li>
                <p>
                    8.1 Cookie is a small text file placed on your computer when you visit the Site.
                </p>
                <p>
                    8.2 Cookies are widely used in order to make the Site work more efficiently, as well as to provide
                    information about the functionality and your behavior on the Site.
                </p>
                <p>
                    8.3 Cookie helps you better interact with the Site and help the Site better interact with you.
                </p>
                <p>
                    8.4 Cookies do not contain your personal data.
                </p>
                <p>
                    8.5 We use cookies and tags (collectively the <span class="text-light">Cookie</span> ) to:
                </p>
                <p class="in-1">
                    8.5.1 Understand how you use Site and to provide you with safe, effective and user-friendly Site;
                </p>
                <p class="in-1">
                    8.5.2 Remember your settings, such as preferred language, type of the device, news already shown to
                    you, your preference about Cookie allowance;
                </p>
                <p class="in-1">
                    8.5.3 Keep opened sessions and conversation during your last visit to the Site;
                </p>
                <p class="in-1">
                    8.5.4 Identify the popularity of different section of the Site and improve respectively;
                </p>
                <p class="in-1">
                    8.5.5 Prevent and exclude unauthorized use of the Site;
                </p>
                <p class="in-1">
                    8.5.6 Keep track of actions and operations;
                </p>
                <p class="in-1">
                    8.5.7 prepares reports, this allows us to measure and analyze the performance of our Services.
                </p>
                <p>
                    8.6 We normally do not associate you with your cookie, however, in exceptional cases, we may use
                    this option to prevent or avoid unauthorized use of the Site and violation of applicable agreements.
                    In this case, we will treat this information as personal and process as described in the Privacy
                    Policy.
                </p>
                <p>
                    8.7 We may use third-party web analytics services that assist us in better understanding of our Site
                    or the App use, those services comply with the prescribed adequacy of security measures. For
                    example, we use Google Analytics service powered by Google LLC (US). This service helps us to
                    improve the effectiveness of our advertising efforts and understand your preferences and interests.
                    It collects information and reports Site usage statistics without personally identifying you – we
                    use it for better delivery of our adverts. Please check the details about Google Analytics services
                    here: <a href="https://policies.google.com/technologies/partner-sites">https://policies.google.com/technologies/partner-sites.</a> However, in some cases, Google can
                    match information collected through Cookie with your Google account and use it under Google Privacy
                    Policy, details here: <a href="https://policies.google.com/privacy">https://policies.google.com/privacy.</a>
                </p>
                <p>
                    8.8 If you do not want to share your Cookie you may restrict it or block it out.
                </p>
                <p>
                    8.9 If you prefer not to allow cookies, please use your browser settings, most browsers give you an
                    ability to manage your cookies or provide you with “incognito mode” or similar options.
                </p>
                <p>
                    8.10 For more information on how to disable cookies at all or how to amend your cookie settings
                    check <a href="http://www.allaboutcookies.org/">http://www.allaboutcookies.org/.</a>
                </p>
                <p>
                    8.11 We also may use similar technology and collect unique identifiers from our visitors of the
                    Site, the information we collect by this means includes:
                </p>
                <p class="in-1">
                    8.11.1 Unique identification numbers, e.g. Internet protocol (IP) address and device ID;
                </p>
                <p class="in-1">
                    8.11.2 as applicable to your type of device, browser type and version, and browser plug-in types and
                    versions, application release and version, device model, manufacturer (brand), operating system,
                    operating system version, OS library version, time of last seen, enable Wi-Fi, radio (EDGE, HSDPA,
                    LTE, WCDMA, none), device screen (width, high, dpi), NFC, telecom operator, Bluetooth enable,
                    Bluetooth version;
                </p>
                <p class="in-1">
                    8.11.3 Time zone setting, city, region, country and language;
                </p>
                <p class="in-1">
                    8.11.4 Operating system and platform;
                </p>
                <p class="in-1">
                    8.11.5 and information about your visit, including the full Uniform Resource Locators (URL) click
                    stream to, through and from our Site (including date and time); products you viewed or searched for;
                    page response times, download errors, length of visits to certain pages, page interaction
                    information (such as scrolling, clicks, and mouse-over’s), and methods used to browse away from the
                    page.
                </p>
                <p>
                    8.12 We use this information for the same purposes as Cookie.
                </p>
                <p>
                    8.13 We use Cookie for the following Purpose, namely:
                </p>
                <p class="in-1">
                    8.13.1 Authentication;
                </p>
                <p class="in-1">
                    8.13.2 Security;
                </p>
                <p class="in-1">
                    8.13.3 Storing preferences and supporting additional features and functionalities;
                </p>
                <p class="in-1">
                    8.13.4 Performance, analytics and personalization;
                </p>
                <p class="in-1">
                    8.13.5 Marketing.
                </p>
                <p>
                    8.14 The time a cookie will stay on your computer or mobile device depends on the type of Cookie
                    whether it is ‘persistent’ or ‘session’ cookie
                </p>
                <p class="in-1">
                    8.14.1 Session cookies will only stay on your device until you stop browsing;
                </p>
                <p class="in-1">
                    8.14.2 Persistent cookies stay on your computer or mobile device until they expire or are deleted.
                </p>
                <p>
                    8.15 Some features of the App may require you to access third-party resources via the Web View or a
                    similar built-in instrument for opening websites within the interface of the App. While you may be
                    prompted to login to your account on different platform and connect it to the App in order to use
                    some features of the App, we do not collect your login credentials and are unable to use your
                    account. The only relevant data that we may collect through automated means is the statistics on the
                    App’s performance and automated actions performed by the Apps via your account on different
                    platform.
                </p>
                <p class="links-privacy">
                    8.16 In order to ensure the proper performance of the App and provide you with the better
                    experience, we use the following third-party libraries that collect data:
                    <a href="https://branch.io/"><span class="text-grey">Branch:</span> https://branch.io/</a>
                    <a href="https://amplitude.com/"><span class="text-grey">Amplitude:</span> https://amplitude.com/</a>
                    <a href="https://firebase.google.com/"><span class="text-grey">Firebase:</span> https://firebase.google.com/</a>
                    <a href="https://onesignal.com/"><span class="text-grey">One Signal:</span> https://onesignal.com/</a>
                    <a href="https://appcenter.ms/"><span class="text-grey">App Center:</span> https://appcenter.ms/</a>
                    <a href="https://www.jivo.ru/"><span class="text-grey">Jivo Site:</span> https://www.jivo.ru/</a>
                    <a href="https://developer.huawei.com/consumer/en/hms/"><span class="text-grey">HMS Core:</span> https://developer.huawei.com/consumer/en/hms/</a>
                </p>

                <li>CHANGES TO THIS PRIVACY POLICY</li>
                <p>
                    9.1 Please note that we may amend this Privacy Policy from time to time at our sole discretion.
                    Therefore, please check this document from time to time to get updates. If any significant updates
                    in regard to data processing terms are made here, we will notify you additionally within reasonable
                    time via email provided by you for the case or as your contact email.
                </p>
                <li>CHANGES TO THIS PRIVACY POLICY</li>
                <p>
                    10.1 If you require any additional information or have any further questions concerning this Privacy
                    Policy, please contact us at <a href="mailto:support@nicrobotics.com">support@nicrobotics.com.</a>
                </p>
            </ol>
        </div>
    </div>
    <div class="container-fluid footerRow">
        <div class="container">
        <div class="row robot-legal">
            <div class="col-sm-6 col-md-9">
                <div class="developers">
                    <p>
                        The robot was created by a team of independent developers and expert trader with 6
                        successful years
                        of
                        experience and it's not affiliated with all compatible brokers.
                    </p>
                    <p>
                        Risk warning:Trading involves high risks including the risk of losing some or all of
                        your investment
                        amount
                        and may be suitable for all investors.
                    </p>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="legal">
                    <p><a href="{{ route('home') }}">Home</a></p>
                    <p>&copy NIC, 2021</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
