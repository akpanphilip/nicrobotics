@extends('layouts.main')
@section('content')
<style>
    .formBox{
        margin-top: 4rem;
        width: 80%;
    }
    .remoteDesktop{
        width: 100%;
        background-color: #0f131b;
        height: auto;
        margin-top: 40px;
    }
    .titleRemote{
        background-color: rgb(59, 59, 189);
        width: 100%;
        height: 90px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
    }
    .message{
        display: none;
    }
    .text-section p{
        text-align: center;
        padding: 5px;
        border-bottom: 1px solid grey;
    }
    .buttonSection{
        width: 100%;
        height: 60px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .orderNow{
        background-color: rgb(59, 59, 189);
        width: 50%;
        margin: auto;
        border: none;
        outline: none;
        color: #fff;
        font-weight: bold;
        padding: 10px;
    }
    .orderBtn:focus .message{
        display: block;
    }
</style>
<div class="container-fluid">
    <div class="row">
    <div class="col-sm-6 col-md-6">
    <div class="row browsers g-3">
        <div class="col-sm-6 col-md-6">
            <div class="browser">
                <p class="computer font-weight-bold text-light">For computer</p>
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
        <div class="col-sm-6 col-md-6">
            <div class="browser">
                <p class="opera text-light font-weight-bold">For Opera</p>
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
        <div class="col-sm-6 col-md-6">
            <div class="browser">
                <p class="opera text-light font-weight-bold">For Opera</p>
                <div class="browserItem">
                    <div class="browserImg">
                        <img src="{{ asset('images/brave.png') }}" width="70" height="50" alt="chrome browser">
                    </div>
                    <div class="browserText">
                        <p class="text-light">Download for</p>
                        <p class="text-light">Brave</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="browser">
                <p class="computer font-weight-bold text-light">For phone</p>
                <div class="browserItem">
                    <div class="browserImg google">
                        <img src="{{ asset('images/play-en.svg') }}" alt="chrome browser">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-12">
            <div class="formBox">
                <form>
                    @csrf
                    <div class="message alert alert-success">
                        I request a copy of the bot!
                    </div>
                    <div class="form-group">
                        <select name="brookers" class="form-control">
                            <option value="">--Select Trading Brokers--</option>
                            <option value="IronTrade (NIC)">IronTrade (NIC)</option>
                            <option value="Pocket Option">Pocket Option</option>
                            <option value="Expert Option">Expert Option</option>
                            <option value="Spectre.ai">Spectre.ai</option>
                            <option value="Binomo">Binomo</option>
                            <option value="IQ Options">IQ Options</option>
                            <option value="Olymp Trade">Olymp Trade</option>
                            <option value="Quotex">Quotex</option>
                            <option value="Binarium">Binarium</option>
                            <option value="Raceoption">Raceoption</option>
                            <option value="Binarycent">Binarycent</option>
                            <option value="Deriv">Deriv</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input id="orderBtn" type="submit" class="orderBtn form-control" value="ORDER">
                    </div>
                </form>
                </div>

        </div>
    </div>

    </div>
    <div class="col-sm-6 col-md-6">
        <div class="remoteDesktop">
            <div class="titleRemote">
                <p>Remote Desktop / VPS</p>
            </div>
            <div class="text-section">
            <p>Unlimited Bandwidth</p>
            <p>200 GB Disk Space</p>
            <p>4GB RAM</p>
            <p>1 Dedicated IP</p>
            <p>100 MBPS Connectivity (1GBPS Port)</p>
            <p>Virtualization KVM</p>
            <p>24/7 Monitoring</p>
            <p>Full Control Panel (Reinstall, Reboot & Manage)</p>
            <p>Windows 2012 R2</p>
            </div>
            <div class="buttonSection">
                <button class="orderNow" href="">ORDER NOW</button>
            </div>
        </div>
    </div>
</div>


@endsection
