@extends('layouts.app')
@section('content')
    <title>Nicrobotics</title>
    <div class="wave">
        <div class="container-fluid">
            <div class="row top-row">
                <div class="col-sm-6 col-md-12 col-lg-6">
                    <div class="topBox moveBun">
                        <p class="fund">
                            Decentralized Hedge Fund The Future Is Here
                        </p>
                        <p class="wave-text">
                            Trade Automation Made Easy With NIC Robotics
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-12 col-lg-6">
                    <div class="topBox">
                        <img class="candleStick" src="{{ asset('images/trading5.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <marquee class="slide">
        <div class="slidingShow">
            <ul class="slidetext d-flex">
                <li class="d-flex">
                    <span id="greenIcon">
                        <i class="fas fa-chevron-up"></i> </span>
                    <p>USDJPY 109.44</p>
                </li>
                <li class="d-flex">
                    <span id="redIcon"><i class="fas fa-chevron-down"></i></span>
                    <p>USDJPY 109.44</p>
                </li>
                <li class="d-flex">
                    <span id="greenIcon">
                        <i class="fas fa-chevron-up"></i> </span>
                    <p>USDJPY 109.44</p>
                </li>
                <li class="d-flex">
                    <span id="redIcon"><i class="fas fa-chevron-down"></i></span>
                    <p>USDJPY 109.44</p>
                </li>
                <li class="d-flex">
                    <span id="greenIcon">
                        <i class="fas fa-chevron-up"></i> </span>
                    <p>USDJPY 109.44</p>
                </li>
                <li class="d-flex">
                    <span id="redIcon"><i class="fas fa-chevron-down"></i></span>
                    <p>USDJPY 109.44</p>
                </li>
                <li class="d-flex">
                    <span id="greenIcon">
                        <i class="fas fa-chevron-up"></i> </span>
                    <p>USDJPY 109.44</p>
                </li>
                <li class="d-flex">
                    <span id="redIcon"><i class="fas fa-chevron-down"></i></span>
                    <p>USDJPY 109.44</p>
                </li>
                <li class="d-flex">
                    <span id="greenIcon">
                        <i class="fas fa-chevron-up"></i> </span>
                    <p>USDJPY 109.44</p>
                </li>
                <li class="d-flex">
                    <span id="redIcon"><i class="fas fa-chevron-down"></i></span>
                    <p>USDJPY 109.44</p>
                </li>
            </ul>
        </div>
    </marquee>
    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500">
            <div class="col-sm-6 col-md-12 col-lg-12">
                <div class="info pt-2">
                    <p class="text-light font-weight-bold">NIC Bot allows you to fully automate trading on different
                        platforms as listed
                        below. Download now and
                        get
                        started.</p>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row accuracySection font-weight-bold">
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="data">
                    <div class="text-light d-flex">
                        <p class="value text-light counter" data-target="90"></p><span>%</span>
                    </div>
                    <p class="info-value">Bid accuracy</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="data">
                    <p class="value text-light counter" data-target="2000"></p>
                    <p class="info-value">Active users</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="data">
                    <div class="text-light d-flex">
                        <p class="value text-light counter" data-target="100"></p><span>$</span>
                    </div>
                    <p class="info-value">Average deposit</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="data" id="about">
                    <div class="text-light d-flex">
                        <p class="value text-light counter" data-target="800"></p> <span
                            style="margin-left:20px">000 $</span>
                    </div>
                    <p class="info-value">Funds paid out</p>
                </div>
            </div>
        </div>

        {{-- about the bot --}}
        <p class="titleAbout text-light">ABOUT THE BOT</p>
        <div class="row" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500">
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="about">
                    <div class="icon">
                        <img src="{{ asset('images/icon-1.svg') }}" alt="">
                    </div>
                    <div class="aboutTitle">
                        <p class="text-light">Profitable strategies</p>
                    </div>
                    <div class="descAbout">
                        <p>Ability to select multiple strategies</p>
                    </div>
                </div>
                <div class="about">
                    <div class="icon">
                        <img src="{{ asset('images/icon-2.svg') }}" alt="">
                    </div>
                    <div class="aboutTitle">
                        <p class="text-light">User friendly interface</p>
                    </div>
                    <div class="descAbout">
                        <p>Detailed instructions included</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="about about-mid-section">
                    <div class="icon">
                        <img src="{{ asset('images/icon-3.svg') }}" alt="">
                    </div>
                    <div class="aboutTitle">
                        <p class="text-light">Automatic trading signal</p>
                    </div>
                    <div class="descAbout">
                        <p>Analysis of 40+ signal indicators</p>
                    </div>
                    <div class="aboutImg">
                        <img src="{{ asset('images/chart10new.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="about">
                    <div class="icon">
                        <img src="{{ asset('images/icon-4.svg') }}" alt="">
                    </div>
                    <div class="aboutTitle">
                        <p class="text-light">Quick setup</p>
                    </div>
                    <div class="descAbout">
                        <p>Setting up the bot will take no more than 5 minutes</p>
                    </div>
                </div>
                <div class="about">
                    <div class="icon">
                        <img src="{{ asset('images/icon-5.svg') }}" alt="">
                    </div>
                    <div class="aboutTitle">
                        <p class="text-light">Support 24/7</p>
                    </div>
                    <div class="descAbout" id="download">
                        <p>Our specialist are in touch with you 24 hours a day</p>
                    </div>
                </div>
            </div>
        </div>
        <p class="titleAbout text-light" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500">DOWNLOAD
            <span>NIC BOT</span> FOR YOUR DEVICE
        </p>
        <p class="subtext font-weight-bold" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400">The Bot
            has been adapted for most types of device.</p>

        <div class="row browsers">
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="browser">
                    <p class="computer font-weight-bold">For computer</p>
                    <div class="browserItem">
                        <div class="browserImg">
                            <img src="{{ asset('images/chrome.svg') }}" alt="chrome browser">
                        </div>
                        <div class="browserText">
                            <p class="text-light">Download for</p>
                            <p class="text-light">Google Chrome</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="browser">
                    <p class="opera">For Opera</p>
                    <div class="browserItem">
                        <div class="browserImg">
                            <img src="{{ asset('images/opera.svg') }}" alt="chrome browser">
                        </div>
                        <div class="browserText">
                            <p class="text-light">Download for</p>
                            <p class="text-light">Opera</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 offset-lg-3">
                <div class="browser">
                    <p class="computer">For phone</p>
                    <div class="browserItem">
                        <div class="browserImg google">
                            <img src="{{ asset('images/play-en.svg') }}" alt="chrome browser">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="rating" class="p-4"></div>
        <div class="rating">
            <div class="ratingsTop pb-4">
                <p class="ratings-top-text">Ratings</p>
                <div class="btn-group btnRatings" role="group" aria-label="Basic outlined example">
                    <button type="button" class="btn today">Today</button>
                    <button type="button" class="btn days ">30 days</button>
                </div>
            </div>

            {{-- table --}}
            <div class="table-responsive firsttbl">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="columnHide" scope="col">Place</th>
                            <th scope="col">Nickname</th>
                            <th class="columnHide" scope="col">Country</th>
                            <th class="columnHide" scope="col">Deals</th>
                            <th class="text-r" scope="col">Profit <span class="questionMark"></span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="columnHide" scope="row"><i class="fas fa-trophy" id="gold"></i> 1</th>
                            <td>Mark</td>
                            <td class="columnHide"><img src="{{ asset('images/nigeria.png') }}" width="25" height="25">Nigeria</td>
                            <td class="columnHide">434</td>
                            <td class="text-r">$ 345</td>
                        </tr>
                        <tr>
                            <th class="columnHide" scope="row"><i class="fas fa-trophy" id="gray"></i> 2</th>
                            <td>Ade</td>
                            <td class="columnHide"><img src="{{ asset('images/nigeria.png') }}" width="25" height="25">Nigeria</td>
                            <td class="columnHide">400</td>
                            <td class="text-r">$ 600</td>
                        </tr>
                        <tr>
                            <th class="columnHide" scope="row"><i class="fas fa-trophy" id="orange"></i> 3</th>
                            <td>Bigie</td>
                            <td class="columnHide"><img src="{{ asset('images/nigeria.png') }}" width="25" height="25">Nigeria</td>
                            <td class="columnHide">500</td>
                            <td class="text-r">$ 260</td>
                        </tr>
                        <tr>
                            <th class="columnHide" scope="row"><i class="fas fa-trophy" id="blue"></i> 4</th>
                            <td>Paul</td>
                            <td class="columnHide"><img src="{{ asset('images/nigeria.png') }}" width="25" height="25">Nigeria</td>
                            <td class="columnHide">200</td>
                            <td class="text-r">$ 160</td>
                        </tr>
                        <tr>
                            <th class="columnHide" scope="row"><i class="fas fa-trophy" id="blue"></i> 5</th>
                            <td>Bisi</td>
                            <td class="columnHide"><img src="{{ asset('images/nigeria.png') }}" width="25" height="25">Nigeria</td>
                            <td class="columnHide">500</td>
                            <td class="text-r">$ 260</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="table-responsive secondtbl">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="columnHide" scope="col">Place</th>
                            <th scope="col">Nickname</th>
                            <th class="columnHide" scope="col">Country</th>
                            <th class="columnHide" scope="col">Deals</th>
                            <th class="text-r" scope="col">Profit <span class="questionMark"></span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="columnHide" scope="row"><i class="fas fa-trophy" id="gold"></i> 1</th>
                            <td>Janney</td>
                            <td class="columnHide"><img src="{{ asset('images/nigeria.png') }}" width="25" height="25">Nigeria</td>
                            <td class="columnHide">400</td>
                            <td class="text-r">$ 245</td>
                        </tr>
                        <tr>
                            <th class="columnHide" scope="row"><i class="fas fa-trophy" id="gray"></i> 2</th>
                            <td>Adenuga</td>
                            <td class="columnHide"><img src="{{ asset('images/nigeria.png') }}" width="25" height="25">Nigeria</td>
                            <td class="columnHide">200</td>
                            <td class="text-r">$ 400</td>
                        </tr>
                        <tr>
                            <th class="columnHide" scope="row"><i class="fas fa-trophy" id="orange"></i> 3</th>
                            <td>Tochi</td>
                            <td class="columnHide"><img src="{{ asset('images/nigeria.png') }}" width="25" height="25">Nigeria</td>
                            <td class="columnHide">459</td>
                            <td class="text-r">$ 455</td>
                        </tr>
                        <tr>
                            <th class="columnHide" scope="row"><i class="fas fa-trophy" id="blue"></i> 4</th>
                            <td>Jerry</td>
                            <td class="columnHide"><img src="{{ asset('images/nigeria.png') }}" width="25" height="25">Nigeria</td>
                            <td class="columnHide">359</td>
                            <td class="text-r">$ 444</td>
                        </tr>
                        <tr>
                            <th class="columnHide" scope="row"><i class="fas fa-trophy" id="blue"></i> 5</th>
                            <td>Tolu</td>
                            <td class="columnHide"><img src="{{ asset('images/nigeria.png') }}" width="25" height="25">Nigeria</td>
                            <td class="columnHide">590</td>
                            <td class="text-r">$ 320</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="faqs pt-4" id="faqs">
            <p class="titleAbout text-light">FAQs</p>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item mb-3">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Is it possible to trade with NIC BOT if I already have an account with any of the listed trading
                            platforms?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong class="text-light text-accordion">
                                No, you have to be a first time user. To trade on the real account you need to activate the
                                robot and make deposits into your trading account.
                            </strong>
                        </div>
                    </div>
                </div>
                <div class="accordion-item mb-3">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            How does NIC trading signals work?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong class="text-light text-accordion">
                                NIC Cloud Analysis Server host 40 technical indicators which monitors and forecasts the
                                direction of assets.
                            </strong>
                        </div>
                    </div>
                </div>
                <div class="accordion-item mb-3">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Can my account be blocked for using the Robot?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong class="text-light text-accordion">
                                NIC Bot Fully simulates the action of a real user and it is impossible to track its use,
                                there is no single case of account blocking associated with the trading bot.
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row robot-legal">
            <div class="col-sm-6 col-md-9">
                <div class="developers">
                    <p>
                        The robot was created by a team of independent developers and expert trader with 6 successful years
                        of
                        experience and it's not affiliated with all compatible brokers.
                    </p>
                    <p>
                        Risk warning:Trading involves high risks including the risk of losing some or all of your investment
                        amount
                        and may be suitable for all investors.
                    </p>
                    <p>Noble Inflow Capital Ltd.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="legal">
                    <p><a href="{{ route('terms') }}">Legal Information</a></p>
                    <p>&copy NIC, 2021</p>
                </div>
            </div>
        </div>
    </div>
@endsection
