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
                        <a class="btn" href="{{ route('privacyPolicy') }}">Privacy Policy</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="linkBox">
                        <a class="btn active" href="{{ route('serviceAgreement') }}">Services agreement</a>
                    </div>
                </div>
            </div>
            <p class="headText">Service Agreement</p>
            <p class="lastUpdated">Last updated: June 20, 2021</p>
            <p class="secText">The Company provides access to its NIC Bot application to any eligible person as determined herein that
                accepts this Service Agreement (you) and to its features under the terms of this public offer on the
                following conditions.
            </p>
            <ol class="termList">
                <li>TERMS USED IN THE AGREEMENT</li>
                <p>
                    1.1 The <span class="text-light">Acceptance</span> is your any action certifying that you have fully accepted the conditions of the
                    Agreement, including taking actions to fulfill the conditions in this Agreement.
                </p>
                <p>
                    1.2 The <span class="text-light">Agreement</span> is this Service Agreement regulating the use of the Services by you, concluded
                    between the Company and you on a non-exclusive and non-discriminatory basis as a result of the
                    acceptance by you of a public offer, which grants to the Company and you the rights and imposes
                    obligations specified in this Agreement.
                </p>
                <p>
                    1.3 NIC bot mobile application is designed to automate trading processes on different trading
                    platforms.
                </p>
                <p>
                    1.4 The <span class="text-light">Company</span> is a legal entity operating under the NIC Bot title.
                </p>
                <p>
                    1.5 The <span class="text-light">Parties</span> are the parties to the current Agreement, namely you and the Company. Each
                    separately is referred to as the Party.
                </p>
                <p>
                    1.6 The <span class="text-light">Services</span> consist of the access to and use of the App and other services, specified by the
                    Agreement and/or the <a href="{{route('terms')}}">Terms and Conditions</a> and/or available via the App, in particular, automated
                    trading on different trading platform via the App.
                </p>
                <p>
                    1.7 The <span class="text-light">Site</span> is <a href="http://www.nicrobotics.com">www.nicrobotics.com</a> webpage with all subpages, related sub domains and domains with
                    URL redirection to that website and serving as an access point to the information located on this
                    website.
                </p>
                <li>GENERAL STATEMENTS</li>
                <p>
                    2.1 The Parties recognize that the Acceptance of the current Agreement shall be unconditional. The
                    acceptance of this Agreement in any case constitutes your consent to the terms of the <a href="{{route('terms')}}">Terms and Conditions</a> and <a href="{{route('privacyPolicy')}}">Privacy Policy</a>.
                </p>
                <p>
                    2.2 For accessing some functionality of the Services, you shall accept the Terms and Conditions of
                    any compatible trading platform, register an account with them, and allow the App to be connected to
                    your trading account platform. All registration and/or login options are managed by the trading
                    platform and we do not have access to your credentials, with exception to your email and ID of the
                    profile. Please note that if you do not accept Terms and Conditions of the trading platform, you
                    will not be eligible to use some features of the Services. Breach of Terms and Conditions of the
                    platform constitutes a material breach of this Agreement.
                </p>
                <p>
                    2.3 The acceptance of the Agreement is constituted with manual acceptance by you of the Agreement
                    and Terms and Conditions before connecting the App with your profile at the ExpertOption platform.
                </p>
                <p>
                    2.4 The edition of the Agreement available at the Site is actual and final.
                </p>
                <p>
                    2.5 The Company may at any time terminate the Agreement in whole or in part, as well as suspend the
                    provision of the Services, which will not be considered an unlawful act on its part and cannot be a
                    ground for any claims.
                </p>

                <li>SUBJECT</li>
                <p>
                    3.1 The Company provides to you the Services on conditions stipulated herein. The App is distributed
                    on a free-of-charge basis.
                </p>
                <p>
                    3.2 The Company provides the Services as a result of your explicitly expressed will. Any
                    manipulations with your trading profile are made solely with your consent. The App does not have
                    access to depositions or withdrawals and is not designed to do so.
                </p>
                <p>
                    3.3 The App may use Web View in order to display to you some parts of the trading platform. Please note that Web View lacks some of the features of fully-developed browsers and your navigation experience via Web View may differ.
                </p>
                <p>
                    3.4 As a part of the Services, you are entitled to use the App in the following modes:
                </p>
                <p class="in-1">
                    3.4.1 Not Activated: this mode is available by default and its functions are limited to demo-trading, the App does not provide signals, the trading profit is limited to a certain threshold when a manual reset is required, your support queries are analyzed in a standard priority.
                </p>
                <p class="in-1">
                    3.4.2 Activated: this mode is available after connecting the App with the profile on any trading platform and depositing a fixed sum indicated in the App. Such mode allows trading with the real account, displays non-individualized signals, the trading profit is unlimited, and the support queries are analyzed in a higher priority.
                </p>
                <p>
                    3.5 If you decide to use our services, you may be prompted to allow the app to access your account via API. If your account is suspended/ deactivated, or access is denied or disallowed, some feature of the services will become inaccessible.
                </p>
                <p>
                    3.6 The company has the right to amend the services at any time (e.g.) introduce new types of services, exclude certain types of services, change the scope of services and otherwise change the services). You cannot change the Scope of services provided to you.
                </p>


                <li>RIGHTS AND DUTIES OF THE PARTIES</li>
                <p>
                    4.1 The obligations of the Company:
                </p>
                <p class="in-1">
                    4.1.1 The Company shall provide Services to you following the conditions of the current Agreement;
                </p>
                <p class="in-1">
                    4.1.2 The Company shall inform you about the sufficient changes to this Agreement, the Terms and Conditions and Privacy Policy.
                </p>
                <p>
                    4.2 The rights of the Company:
                </p>
                <p class="in-1">
                    4.2.1 The Company has the right on its discretion to modify, change or terminate the provision of Services anytime without prior notification;
                </p>
                <p class="in-1">
                    4.2.2 The Company has the right to restrict your access to the Services in case you are not eligible to use them;
                </p>
                <p class="in-1">
                    4.2.3 The Company has the right to terminate the Agreement in case you do not fulfill your obligations;
                </p>
                <p class="in-1">
                    4.2.4 The Company reserves the right to assign any rights or obligations contained in the Agreement at its sole discretion.
                </p>
                <p>
                    4.3 Your Obligations
                </p>
                <p class="in-1">
                    4.3.1 You shall read carefully and accept the Agreement, Terms and Conditions, and Privacy Policy before engaging with the Company;
                </p>
                <p class="in-1">
                    4.3.2 Inform the Company of breach or suspicion of breach of this Agreement, Terms and Conditions, or Privacy Policy of any kind you are aware of;
                </p>
                <p class="in-1">
                    4.3.3 Comply with a dispute settlement procedure established herein;
                </p>
                <p class="in-1">
                    4.3.4 Notify the Company about any claims that may arise during or in relation to the business engagement with the Company;
                </p>
                <p class="in-1">
                    4.3.5 Comply with the conduct requirements listed in the Terms and Conditions;
                </p>
                <p class="in-1">
                    4.3.6 Comply with the laws and regulations of the territory from which you access or use the Services or that are otherwise applicable to you;
                </p>
                <p class="in-1">
                    4.3.7 under no circumstances you shall disclose, share, reproduce, copy, distribute, make public, and in any other way use any results of the Services that become available to you in the process or as a result of the provision of the Services;
                </p>
                <p class="in-1">
                    4.3.8 monitor any updates to the information posted on the Site, including changes to the Terms and Conditions, changes to this Agreement and any other materials that are directly or indirectly related to the provision of the Services or affect them. You waive the right to refer to the lack of awareness of these changes, if such changes are posted on the Site;
                </p>
                <p class="in-1">
                    4.3.9 Not to reverse engineer the code of the App, interfere with the Site and internal networks of the Company.
                </p>
                <p>
                    4.4 Your rights
                </p>
                <p class="in-1">
                    4.4.1 To receive the Services in the scope established by this Agreement;
                </p>
                <p class="in-1">
                    4.4.2 To terminate the Agreement as determined herein.
                </p>

                <li>RESPONSIBILITY OF THE PARTIES</li>
                <p>
                    5.1 You understand and agree that the Services are provided on “as is” and “as available” basis. The Company is not responsible under any circumstances for:
                </p>
                <p class="in-1">
                    5.1.1 The quality and reliability of the Services provided to you;
                </p>
                <p class="in-1">
                    5.1.2 Your and /or third parties’ losses and/or lost profits.
                </p>
                <p>
                    5.2 Each Party shall bear responsibility for failure to perform or inappropriate performance of the obligations by one of the Parties according to the Agreement.
                </p>
                <p>
                    5.3 In case there are claims, suits, fines from the side of third parties and/or controlling organizations, related to infringing the rights of third parties when providing Services according to this Agreement, this is your sole responsibility to resolve such issues on your own, without referring to the Company, and to compensate the Company in full scope any losses, including fine sanctions resulting from the infringement the rights, duties, guarantees etc. mentioned above.
                </p>
                <p>
                    5.4 The Company is not responsible for the actions or the inaction and the decisions of governmental and other entities impacting the possibility of fulfillment of the current Agreement.
                </p>
                <li>CHANGES TO AND TERMINATION OF THE AGREEMENT</li>
                <p>
                    6.1 The Agreement is active since the moment of publishing on the Site of the Company, and becomes binding since the moment it is accepted by you.
                </p>
                <p>
                    6.2 The Agreement can be terminated after you discontinue App’s access to your profile on any of the platforms or if such profile is terminated or suspended. The Agreement can be also terminated by the Party if the other Party fails to fulfill its obligations or at the request of any Party. In case the Agreement is terminated you will no longer be allowed to use the Services.
                </p>
                <p>
                    6.3 In case of the significant violation of the provisions of the Agreement by one of the Parties, the other Party has the right to unilaterally terminate the Agreement.
                </p>
                <p>
                    6.4 The current Agreement can be changed or modified by the Company with a publication of the new version on the Site. In case you do not agree with the changes, you shall cease using the Services.
                </p>

                <li>WARRANTIES AND REPRESENTATIONS</li>
                <p>
                    7.1 Excluding warranties mentioned in this Agreement, the Company does not provide any other direct or indirect guarantees at this Agreement.
                </p>
                <p>
                    7.2 By accepting this Agreement, you warrant and represent that you are a legally capable natural person of at least 18 year old (or older pursuant to legal requirements in your jurisdiction), self-employed person or an authorized representative of a legal person that is willing to enter into the Agreement with the Company in electronic form as a result of a manual acceptance, thereby, obtaining a right to use the App and a duty to fulfill your obligations under the Agreement. You represent that you are not a citizen of the United States of America, reside or domiciled in the United States of America or in any other way be subject to the jurisdiction of the United States of America or listed on any U.S. Government list of prohibited or restricted countries or parties.
                </p>
                <p>
                    7.3 The acceptance of the conditions of the current Agreement you confirm and guarantee that:
                </p>
                <p class="in-1">
                    7.3.1 In case you receive incorrect data or materials, and still decide to use them you have full responsibility for any negative consequences, related to provision of such Services by the Company;
                </p>
                <p class="in-1">
                    7.3.2 You accept the Agreement voluntarily, and this proves that:
                </p>
                <p class="in-2">
                    7.3.2.1 You have read the Agreement,
                </p>
                <p class="in-2">
                    7.3.2.2 You have understood the conditions specified of the Agreement,
                </p>
                <p class="in-2">
                    7.3.2.3 You have understood all the provisions of the Agreement and consequences of your actions or negligence regarding the conclusion and fulfillment of the Agreement;
                </p>
                <p class="in-1">
                    7.3.3 You have all the rights and permissions needed to conclude and execute the Agreement.
                </p>
                <p>
                    7.4 The guarantee mentioned in the agreement act for the unlimited period of time and shall survive the termination or expiration of this Agreement.
                </p>
                <li>EXCLUSION AND LIMITATION OF LIABILITY</li>
                <p>
                    8.1 The Company does not provide any implied warranties with regard to the Services or the App and does not warrant their merchantability or fitness for a particular purpose.
                </p>
                <p>
                    8.2 The Company assumes no liability towards you for the performance of the App, the ability of the App to meet your expectations, requirements, be error-free, virus-free, or operate without interruption, or that information transmitted through the communication means shall be accurate or timely. The Company shall also assume no liability for other users of the Services or any employees of the Company to perform as expected.
                </p>
                <p>
                    8.3 The Company shall in particular not be liable for any loss of any kind suffered or incurred by you:
                </p>
                <p class="in-1">
                    8.3.1 as a result of your negligence;
                </p>
                <p class="in-1">
                    8.3.2 In case of use by a third party of your login credentials either communicated to this third party by you or obtained by the third party in an abusive or fraudulent manner;
                </p>
                <p class="in-1">
                    8.3.3 in case the Company imposes any limits, restrictions, or preconditions.
                </p>

                <li>WAIVER</li>
                <p>
                    9.1 THE SERVICES PROVIDED BY THE COMPANY ARE NOT RELATED TO PROVIDING TRADING, FINANCIAL, OR INVESTMENT ADVICE. THE COMPANY DOES NOT ENCOURAGE MENTIONED ACTIVITIES. THE COMPANY IS NOT A REGISTERED TRADING, FINANCIAL OR INVESTMENT ADVISOR.
                </p>
                <p>
                    9.2 IN NO EVENT SHALL THE COMPANY, ITS EMPLOYEES, OFFICERS, DIRECTORS, AFFILIATES, AGENTS OR LICENSORS BE LIABLE TO YOU OR TO ANY THIRD PARTY OR TO ANYONE ELSE FOR ANY KIND OF FINANCIAL LOSS, LOST PROFITS, ANY SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGE OR ANY OTHER SIMILAR DAMAGE OR ANY OTHER LOSS OR INJURY, RESULTING DIRECTLY OR INDIRECTLY FROM USE OF THE SERVICES.
                </p>
                <li>FORCE-MAJEURE</li>
                <p>
                    10.1 You understand and agree that the provision of the Services depends on the availability and technical capabilities of the Company, the state of the Internet and is also regulated by legal requirements. In this regard, the Company may establish the conditions and restrictions for the use and provision of the Services, in connection with which there may be restrictions in the provision of the Services, as well as the impossibility of their provision.
                </p>
                <p>
                    10.2 The Parties are relieved from a responsibility for not accomplishing or inadequate performance of their duties according to the current Agreement, caused by the irresistible power (force-majeure), which happened after the conclusion of the current Agreement. In order for such circumstances to have an unusual character the Company and you could neither foresee nor overcome such circumstances by the reasonable actions. Such conditions include: floods, fire, earthquake and other natural effects, war, armed conflicts or any military activity, acts or actions of the competent bodies, governmental bodies and any other similar conditions, which are not under control of the Parties.
                </p>
                <p>
                    10.3 If the obstacles of the force-majeure last for more than 3 months, any Party may terminate the current Agreement.
                </p>
                <li>GOVERNING LAW AND DISPUTE SETTLEMENT</li>
                <p>
                    11.1 This Agreement is governed by the laws of England and Wales without regard to its conflict-of-laws principles.
                </p>
                <p>
                    11.2 All disputes arising from the Agreement or in connection with it shall be resolved by the Parties in the mandatory amicable negotiation procedure. The Party that received the claim must return an answer to it to the other Party within (30) thirty business days of the receipt.
                </p>
                <p>
                    11.3 If the dispute or claim cannot be resolved in a negotiation procedure, the exclusive means of resolving any dispute or claim arising out of or relating to this Agreement (including any alleged breach thereof), shall be binding arbitration administered in accordance with the Arbitration Rules of the Arbitration Institute of the Stockholm Chamber of Commerce. The seat of the arbitration shall be London, United Kingdom. The arbitrator shall be one, the language of proceedings shall be English. You may not under any circumstances commence or maintain against the Company any class action, class arbitration, or other representative action or proceeding. The governing law shall be the law established in clause 11.1.
                </p>
                <li>OTHER CONDITIONS</li>
                <p>
                    12.1 The Company does not accept any provisions, obligations or duties regarding the subject of the Agreement, excluding the ones listed in the Agreement, which regulate the accomplishment of the Agreement, excluding the cases when such provisions, obligations or duties are stipulated in a written form and are signed by the Company and you. In case any other provision contradicts the provisions of this Agreement, the provisions of this Agreement shall prevail.
                </p>
                <p>
                    12.2 If any of the conditions of the Agreement is considered void, illegal or cannot be in force because of the relevant legislation, such conditions should be disregarded, while the other terms and conditions of the Agreement do not change and are still in force. In case of discrepancy between the English version of the Terms and other language versions of the Terms, the English version shall prevail. Translations of the Terms in other languages are not binding on the Company.
                </p>
                <p>
                    12.3 Any existing agreements with identical subjects made between Parties before conclusion of this Agreement are terminated since the moment of conclusion of the given Agreement.
                </p>
                <p>
                    12.4 In case there are any questions, inquiries, complaints, suggestions, objections and other forms of feedback regarding the performance of Services, you may contact the Company via the following email: <a href="mailto:support@nicrobotics.com">support@nicrobotics.com</a>
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
