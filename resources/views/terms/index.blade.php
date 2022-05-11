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
    <title>Terms and conditions | NicRobotics</title>
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
                <span class="navbar-toggler-icon">
                </span>
            </button>
        </div>
    </nav>
    <div class="container">
        <div class="sectionTab">
            <div class="row termsBtn">
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="linkBox">
                        <a class="btn active" href="{{ route('terms') }}">Terms and conditions</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="linkBox">
                        <a class="btn" href="{{ route('privacyPolicy') }}">Privacy Policy</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="linkBox">
                        <a class="btn" href="{{ route('serviceAgreement') }}">Services agreement</a>
                    </div>
                </div>
            </div>
            <p class="headText">Terms and conditions</p>
            <p class="lastUpdated">Last updated: September 20, 2021 </p>
            <p class="secText">NIC Bot is a bot that was created for automated trading on different trading platforms. To use the
                Site
                and the App you must agree to the below terms, so please read them carefully.</p>
            <ol class="termList">
                <li>INTRODUCTION</li>
                <p><b class="text-light">1.1</b> These Terms and Conditions (the <b
                        class="text-light">Terms</b>) govern the use of certain services, including
                    accessing the website <a class="text-bold"
                        href="http://www.nicrobotics.com">www.nicrobotics.com</a> with all its subpages, related
                    subdomains and
                    domains with URL redirection to that website (the <span class="text-light font-weight-bold">Site</span> ), using
                    the NicRobotics application
                    available at Google Play via the link , and/or browser extension available via the link (the
                    App) (collectively, the Services), provided by NicRobotics (the <span class="text-light font-weight-bold">Company</span> or we) to any
                    individual who uses the Services (you).</p>
                <p>1.2 If you have any questions regarding these Terms or about the Company, please contact us
                    by email at <a href="mailto:support@nicrobotics.com">support@nicrobotics.com</a> </p>
                <li>ACCEPTANCE</li>
                <p>
                    2.1 By using or accessing the Services, you agree to these Terms. If you do not agree, do
                    not use the Services. In addition, when using the Services, you shall be subject to any
                    posted guidelines or rules applicable to the Services that may contain terms and conditions
                    in addition to those in these Terms.
                </p>
                <p>
                    2.2 The Company grants you a non-exclusive, non-transferable and limited personal license to
                    access and use the Site and the App. This license is conditional upon your full compliance
                    with the Terms.
                </p>
                <li>PRIVACY</li>
                <p>
                    3.1 Please refer to our <a href="{{ route('privacyPolicy') }}">Privacy Policy</a> that is an integral part of these Terms, for
                    information on how we collect, use, and disclose personal data. You acknowledge and agree
                    that your use of the Services is subject to our Privacy Policy.
                </p>
                <li>CHANGES TO THE TERMS</li>
                <p>
                    4.1 We may without prior notice modify, change or discontinue all or any part of these Terms
                    at any time and in our sole discretion. Any edition of the Terms made publicly available on
                    the Site is actual and final. We will notify you only on the sufficient changes.
                </p>
                <p>
                    4.2 It is your responsibility to check the Terms from time to time during your use of the
                    Services. If you do not accept the modified version of the Terms, you shall immediately
                    cease using the Services.
                </p>
                <p>
                    4.3 We may terminate these Terms and your access to all or any part of the Services at any
                    time and for any reason without prior notice or any liability for us.
                </p>
                <li>GENERAL PROVISIONS</li>
                <p>
                    5.1 To be eligible to use the Services, you must be at least 18 years old (or older pursuant
                    to legal requirements in your jurisdiction) and shall not be a citizen of the United States
                    of America, reside/have a domicile in the United States of America, or in any other way be
                    subject to the jurisdiction of the United States of America.
                </p>
                <p>
                    5.2 We reserve the right to suspend of prohibit your use of the Services at any time if we
                    have reasons to believe that you have, may, or intended to violate the Terms.
                </p>
                <p>
                    5.3 We reserve the right at any time to modify, suspend or discontinue any part of the
                    Services with or without notice. You agree that we shall not be liable to you or to any
                    third party for any such modification, suspension or discontinuance. We also reserve the
                    right at any time in our sole discretion to block users from certain IP addresses.
                </p>
                <p>
                    5.4 While we welcome any feedback or comments from you, please note that any unsolicited
                    ideas, feedback or suggestions pertaining to our business, such as proposals for new or
                    improved products or technologies, website or tool enhancements, processes, materials,
                    marketing plans or new product names you transfer irrevocably, royalty-free, worldwide and
                    exclusively all the proprietary rights for listed items to the Company upon submission. You
                    waive moral rights for the listed items and your right for any compensation and the rights
                    to forbid, allow, restrict or otherwise by any method influence or obstruct the Company to
                    use or enjoy its rights in the listed above items.
                </p>
                <p>
                    5.5 The Services may contain links to third party services that are not owned or controlled
                    by the Company. The Company has no control over and assumes no responsibility for the
                    content, privacy policies, or practices of any third-party services. In addition, the
                    Company will not and cannot censor or edit the content of any third-party service. You gain
                    access to and use the services, products or third-party sites at your own discretion and
                    risk, and you will be solely responsible for any damage to your computer system or mobile
                    device for loss of data resulting there from. You expressly release the Company from any and
                    all liability, claims and damages both known and unknown arising from your use of any
                    third-party service, even if foreseeable.
                </p>
                <li>SERVICES</li>
                <p>
                    6.1 This Section describes the Services provided by the Company and sets forth specific
                    rules, if any, which shall prevail in the event of any conflicts with other provisions of
                    these Terms.
                </p>
                <p>
                    6.2 We are not obligated to maintain or support any of the Services, to provide all or any
                    specific content of the Services, or to provide you with updates, upgrades or services
                    related thereto. You acknowledge that we may from time to time in our sole discretion make
                    updates or upgrades to any of the Services, disable access for any period of time or
                    permanently, and automatically update or upgrade the version of any of the Services that you
                    are using. You consent to such automatic updating or upgrading and agree that these Terms
                    will apply to all such updates or upgrades, unless such upgrade is accompanied by a separate
                    license, in which case the terms of that license will govern.
                </p>
                <p>
                    6.3 The Services and all content, functions, and materials made available to you are
                    provided “as is” or “as available,” without warranty of any kind, either express or implied,
                    including, without limitation, any warranties of title, non-infringement, merchantability or
                    fitness for a particular purpose.
                </p>
                <p>
                    6.4 Neither the Company nor its current or future affiliates, subsidiaries, nor its or their
                    officers, directors, employees or agents (collectively, the Affiliated Parties) warrant that
                    any of the foregoing will be timely, secure, uninterrupted or error-free, or that defects
                    will be corrected. None of the Affiliated Parties shall be liable for any damage to, or
                    viruses that may infect your computer equipment or other property on account of your access
                    to or use of any of the foregoing.
                </p>
                <p>
                    6.5 The Site allows you to access the information service. The data obtained by you from the
                    use of our Services is of exclusively informatory nature.
                </p>
                <p>
                    6.6 The App allows you to set up the automated trading via your account on any of our listed
                    trading platform as described in our Service Agreement.
                </p>
                <p>
                    6.7 All information provided to you through Services is the sole property of the Company and
                    is provided to you for your sole individual use. No part of such information may be
                    reproduced, distributed, transmitted, or otherwise made available without our prior consent.
                    Any unauthorized disclosure is strictly prohibited. The Company reserves its right to claim
                    damages from you, including any loss of profits, for your unauthorized use of such
                    information.
                </p>
                <p>
                    6.8 By accessing and using the Services, you hereby agree that:
                </p>
                <p class="in-1">
                    6.8.1 You will not use the Services for any unlawful purpose;
                </p>
                <p class="in-1">
                    6.8.2 You will not upload post, email, transmit, or otherwise make available any content
                    that:
                </p>
                <p class="in-2">
                    6.8.2.1 Infringe any copyright, trademark, right of publicity, or other proprietary rights
                    of any person or entity;
                </p>
                <p class="in-2">
                    6.8.2.2 is threatening, tortuous, defamatory, libelous, indecent, obscene, pornographic,
                    sexually explicit, invasive of another’s privacy, or promotes extreme violence or cruelty to
                    animals, or contains hate speech (i.e., speech that attacks or demeans a group based on race
                    or ethnic origin, religion, disability, gender, age, veteran status, or sexual
                    orientation/gender identity);
                </p>
                <p class="in-2">
                    6.8.2.3 Discloses any sensitive information about another person, including that person’s
                    email address, postal address, phone number, credit card information, or any similar
                    information.
                </p>
                <p class="in-1">
                    6.8.3 You will not “stalk” or otherwise harass another person;
                </p>
                <p class="in-1">
                    6.8.4 You will not spam or use the Services to engage in any commercial activities;
                </p>
                <p class="in-1">
                    6.8.5 You will not access or use the Services to collect any market research for a competing
                    business;
                </p>
                <p class="in-1">
                    6.8.6 You will not impersonate any person or entity;
                </p>
                <p class="in-1">
                    6.8.7 you will not interfere with or attempt to interrupt the proper operation of the Services
                    through the use of any virus, device, information collection or transmission mechanism, software or
                    routine, or access or attempt to gain access to any data, files, or passwords related to the
                    Services through hacking, password or data mining, or any other means;
                </p>
                <p class="in-1">
                    6.8.8 you will not use any robot or other automated means to access the Services for any purpose
                    without our express written permission; provided, however, we grant the operators of public search
                    engines permission to use spiders to copy materials from the public portions of the Services for the
                    sole purpose of and solely to the extent necessary for creating publicly-available searchable
                    indices of the materials, but not caches or archives of such materials;
                </p>
                <p class="in-1">
                    6.8.9 You will not take any action that imposes or may impose (as determined in our sole discretion)
                    an unreasonable or disproportionately large load on our technical infrastructure.
                </p>
                <p>
                    6.9 We respect the intellectual property rights of others. We will respond expeditiously to claims
                    of copyright infringement. If you see any material within our Services that in your good faith
                    belief may infringe someone’s copyright, you may notify us by emailing us at <a href="mailto:support@nicrobotics.com">support@nicrobotics.com</a>
                    with “Copyright” in the subject line.
                </p>
                <li>
                    INDEMNIFICATION
                </li>
                <p>
                    7.1 To the fullest extent permitted by applicable law, you agree to indemnify, defend and hold
                    harmless the Company, our respective past, present and future employees, officers, directors,
                    contractors, consultants, equity holders, suppliers, vendors, service providers, parent companies,
                    subsidiaries, affiliates, agents, representatives, predecessors, successors and assigns
                    (individually and collectively, the <span class="text-light font-weight-bold">Indemnified</span> Parties), from and against all actual or alleged
                    third-party claims, damages, awards, judgments, losses, liabilities, obligations, penalties,
                    interest, fees, expenses (including, without limitation, attorneys’ fees and expenses) and costs
                    (including, without limitation, court costs, costs of settlement and costs of pursuing
                    indemnification and insurance), of every kind and nature whatsoever, whether known or unknown,
                    foreseen or unforeseen, matured or per matured, or suspected or unsuspected, in law or equity,
                    whether in tort, contract or otherwise (collectively, “Claims”), including, but not limited to,
                    damages to property or personal injury, that are caused by, arise out of or are related to:
                </p>
                <p class="in-1">
                    7.1.1 Your use or misuse of the Services,
                </p>
                <p class="in-1">
                    7.1.2 Your violation of these Terms,
                </p>
                <p class="in-1">
                    7.1.3 Your violation of the rights of a third party, including another user.
                </p>
                <p>
                    7.2 You agree to promptly notify the Company of any third- party claims and cooperate with the
                    Indemnified parties in defending such Claims. You further agree that the Indemnified parties shall
                    have Control of the defense or settlement of any third-party Clams. This indemnity is in addition
                    to, and not in lieu of, any other indemnities set forth in a written agreement between you and the
                    company.
                </p>
                <li>GOVERNING LAW AND DISPUTE RESOLUTION</li>
                <p>
                    8.1 These Terms, their interpretation, performance or any breach thereof shall be construed in
                    accordance with, and all questions with respect thereto shall be determined by the laws of England
                    and Wales without regard to its conflict-of-laws principles.
                </p>
                <p>
                    8.2 All disputes arising from the Terms or in connection with them shall be resolved by the Parties
                    in the mandatory amicable negotiation procedure. The Party that received the claim must return an
                    answer to it to the other Party within (30) thirty business days of the receipt.
                </p>
                <p>
                    8.3 If the dispute or claim cannot be resolved in a negotiation procedure, the exclusive means of
                    resolving any dispute or claim arising out of or relating to these Terms and the Services (including
                    any alleged breach thereof) shall be binding arbitration administered in accordance with the
                    Arbitration Rules of the Arbitration Institute of the Stockholm Chamber of Commerce. The seat of the
                    arbitration shall be London, United Kingdom. The arbitrator shall be one; the language of
                    proceedings shall be English. You may not under any circumstances commence or maintain against the
                    Company any class action, class arbitration, or other representative action or proceeding. The
                    governing law shall be the law established in clause 8.1.
                </p>
                <p>
                    8.4 By accessing or using the Services in any manner, you agree to the above arbitration agreement.
                    In doing so, you give up your right to go to court to assert or defend any claims between you and
                    the Company. You also give up your right to participate in a class action or other class proceeding.
                    Your rights will be determined by a neutral arbitrator, not a judge or jury.
                </p>
                <p>
                    8.5 In the event that this arbitration agreement is for any reason held to be unenforceable, any
                    litigation against the Company may be commenced only in the courts located in England. You hereby
                    irrevocably consent to the jurisdiction of those courts for such purposes.
                </p>
                <li>MISCELLANEOUS</li>
                <p>
                    9.1 Nothing in these Terms shall be construed to create a partnership, fiduciary, joint venture or
                    agency relationship between you and us.
                </p>
                <p>
                    9.2 You may not assign any of your rights or delegate any of your obligations under these Terms
                    without our prior written consent. We may assign or delegate any rights or obligations contained in
                    this Terms, at any portion and at our sole discretion. Any purported assignment which is
                    inconsistent with the foregoing shall be null and void.
                </p>
                <p>
                    9.3 No waiver of any breach of any provision of these Terms shall constitute a waiver of any prior,
                    concurrent or subsequent breach of the same or any other provisions, and no waiver shall be
                    effective unless made in writing and signed by an authorized representative of the waiving Party.
                </p>
                <p>
                    9.4 In the event any provision of these Terms shall for any reason is held to be invalid, illegal or
                    unenforceable in any respect, the remaining provisions shall remain in full force and effect. In
                    case of discrepancy between the English version of the Terms and other language versions of the
                    Terms, the English version shall prevail. Translations of the Terms in other languages are not
                    binding on the Company.
                </p>
                <p>
                    9.5 The information contained herein is not intended for distribution to, or use by, any person or
                    entity in any jurisdiction or country where such distribution or use would be contrary to law or
                    regulation. The Services are not intended for use by any person in any jurisdiction where the
                    publication or availability of such services is prohibited, by reason of that person’s nationality,
                    residence or otherwise. Persons under these restrictions must not use our Services. The Company
                    cannot be held liable for any distribution of information regarding our Services by third parties in
                    prohibited jurisdictions.
                </p>
                <p>
                    9.6 You agree and understand that no information and/or data analytics obtained by virtue of your
                    use of the Services is intended to constitute trading, financial, or investment advice.
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
