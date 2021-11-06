@extends('layouts.master')
@section('title', 'Pricing | Endless - Premium Admin Template')
@section('style')

@endsection

@section('breadcrumb-title', 'Pricing')
@section('breadcrumb-items')
<li class="breadcrumb-item active">Pricing</li>
@endsection
  
@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header"> 
          <h5>Simple Pricing Card</h5>
        </div>
        <div class="card-body row pricing-content">
          <div class="col-xl-3 col-sm-6 xl-50">
            <div class="card text-center pricing-simple">
              <div class="card-body">
                <h3>Standard</h3>
                <h1>$15</h1>
                <h6 class="mb-0">Lorum Ipsum</h6>
              </div><a class="btn btn-lg btn-primary btn-block" href="#">
                <h5 class="mb-0">Purchase</h5></a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 xl-50">
            <div class="card text-center pricing-simple">
              <div class="card-body">
                <h3>Business</h3>
                <h1>$25</h1>
                <h6 class="mb-0">Lorum Ipsum</h6>
              </div><a class="btn btn-lg btn-primary btn-block" href="#">
                <h5 class="mb-0">Purchase</h5></a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 xl-50">
            <div class="card text-center pricing-simple">
              <div class="card-body">
                <h3>Premium</h3>
                <h1>$35</h1>
                <h6 class="mb-0">Lorum Ipsum</h6>
              </div><a class="btn btn-lg btn-primary btn-block" href="#">
                <h5 class="mb-0">Purchase</h5></a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 xl-50">
            <div class="card text-center pricing-simple">
              <div class="card-body">
                <h3>Extra</h3>
                <h1>$45</h1>
                <h6 class="mb-0">Lorum Ipsum</h6>
              </div><a class="btn btn-lg btn-primary btn-block" href="#">
                <h5 class="mb-0">Purchase</h5></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header"> 
          <h5>Pricing</h5>
        </div>
        <div class="card-body row pricing-content">
          <div class="col-md-4">
            <div class="pricing-block card text-center">
              <svg x="0" y="0" viewBox="0 0 360 220">
                <g>
                  <path fill="#4466f2" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061                                        c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243                                        s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48                                        L0.732,193.75z"></path>
                </g>
                <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="78.4489">$10</text>
                <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text>
              </svg>
              <div class="pricing-inner">
                <h3 class="font-primary">Standard</h3>
                <ul class="pricing-inner">
                  <li>
                    <h6><b>50GB</b> Disk Space</h6>
                  </li>
                  <li>
                    <h6><b>50</b> Email Accounts</h6>
                  </li>
                  <li>
                    <h6><b>50GB</b> Bandwidth</h6>
                  </li>
                  <li>
                    <h6><b>10</b> Subdomains</h6>
                  </li>
                  <li>
                    <h6><b>15</b> Domains</h6>
                  </li>
                </ul>
                <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="pricing-block card text-center">
              <svg x="0" y="0" viewBox="0 0 360 220">
                <g>
                  <path fill="#4466f2" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061                                        c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243                                        s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48                                        L0.732,193.75z"></path>
                </g>
                <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="78.4489">$20</text>
                <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text>
              </svg>
              <div class="pricing-inner">
                <h3 class="font-primary">Business</h3>
                <ul class="pricing-inner">
                  <li>
                    <h6><b>60GB</b> Disk Space</h6>
                  </li>
                  <li>
                    <h6><b>60</b> Email Accounts</h6>
                  </li>
                  <li>
                    <h6><b>60GB</b> Bandwidth</h6>
                  </li>
                  <li>
                    <h6><b>15</b> Subdomains</h6>
                  </li>
                  <li>
                    <h6><b>20</b> Domains</h6>
                  </li>
                </ul>
                <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="pricing-block card text-center">
              <svg x="0" y="0" viewBox="0 0 360 220">
                <g>
                  <path fill="#4466f2" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061                                        c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243                                        s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48                                        L0.732,193.75z"></path>
                </g>
                <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="78.4489">$30</text>
                <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text>
              </svg>
              <div class="pricing-inner">
                <h3 class="font-primary">Premium</h3>
                <ul class="pricing-inner">
                  <li>
                    <h6><b>60GB</b> Disk Space</h6>
                  </li>
                  <li>
                    <h6><b>60</b> Email Accounts</h6>
                  </li>
                  <li>
                    <h6><b>60GB</b> Bandwidth</h6>
                  </li>
                  <li>
                    <h6><b>15</b> Subdomains</h6>
                  </li>
                  <li>
                    <h6><b>20</b> Domains</h6>
                  </li>
                </ul>
                <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header"> 
          <h5>Pricing Table With Border</h5>
        </div>
        <div class="card-body row pricing-card-design-2 pricing-content">
          <div class="col-md-4">
            <div class="pricing-block card text-center">
              <svg x="0" y="0" viewBox="0 0 360 220">
                <g>
                  <path fill="#4466f2" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061                                        c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243                                        s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48                                        L0.732,193.75z"></path>
                </g>
                <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="78.4489">$10</text>
                <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text>
              </svg>
              <div class="pricing-inner">
                <h3 class="font-primary">Standard</h3>
                <ul class="pricing-inner">
                  <li>
                    <h6><b>50GB</b> Disk Space</h6>
                  </li>
                  <li>
                    <h6><b>50</b> Email Accounts</h6>
                  </li>
                  <li>
                    <h6><b>50GB</b> Bandwidth</h6>
                  </li>
                  <li>
                    <h6><b>10</b> Subdomains</h6>
                  </li>
                  <li>
                    <h6><b>15</b> Domains</h6>
                  </li>
                </ul>
                <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="pricing-block card text-center">
              <svg x="0" y="0" viewBox="0 0 360 220">
                <g>
                  <path fill="#4466f2" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061                                        c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243                                        s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48                                        L0.732,193.75z"></path>
                </g>
                <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="78.4489">$20</text>
                <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text>
              </svg>
              <div class="pricing-inner">
                <h3 class="font-primary">Business</h3>
                <ul class="pricing-inner">
                  <li>
                    <h6><b>60GB</b> Disk Space</h6>
                  </li>
                  <li>
                    <h6><b>60</b> Email Accounts</h6>
                  </li>
                  <li>
                    <h6><b>60GB</b> Bandwidth</h6>
                  </li>
                  <li>
                    <h6><b>15</b> Subdomains</h6>
                  </li>
                  <li>
                    <h6><b>20</b> Domains</h6>
                  </li>
                </ul>
                <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="pricing-block card text-center">
              <svg x="0" y="0" viewBox="0 0 360 220">
                <g>
                  <path fill="#4466f2" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061                                        c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243                                        s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48                                        L0.732,193.75z"></path>
                </g>
                <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="78.4489">$30</text>
                <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text>
              </svg>
              <div class="pricing-inner">
                <h3 class="font-primary">Premium</h3>
                <ul class="pricing-inner">
                  <li>
                    <h6><b>60GB</b> Disk Space</h6>
                  </li>
                  <li>
                    <h6><b>60</b> Email Accounts</h6>
                  </li>
                  <li>
                    <h6><b>60GB</b> Bandwidth</h6>
                  </li>
                  <li>
                    <h6><b>15</b> Subdomains</h6>
                  </li>
                  <li>
                    <h6><b>20</b> Domains</h6>
                  </li>
                </ul>
                <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header"> 
          <h5>Color Highlight</h5>
        </div>
        <div class="card-body pricing-card-design-1">
          <div class="row pricing-content">
            <div class="col-md-4">
              <div class="pricing-block card text-center">
                <svg x="0" y="0" viewBox="0 0 360 220">
                  <g>
                    <path fill="#4466f2" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061                                          c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243                                          s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48                                          L0.732,193.75z"></path>
                  </g>
                  <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="78.4489">$10</text>
                  <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                  <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text>
                </svg>
                <div class="pricing-inner">
                  <h3 class="font-primary">Standard</h3>
                  <ul class="pricing-inner">
                    <li>
                      <h6><b>50GB</b> Disk Space</h6>
                    </li>
                    <li>
                      <h6><b>50</b> Email Accounts</h6>
                    </li>
                    <li>
                      <h6><b>50GB</b> Bandwidth</h6>
                    </li>
                    <li>
                      <h6><b>10</b> Subdomains</h6>
                    </li>
                    <li>
                      <h6><b>15</b> Domains</h6>
                    </li>
                  </ul>
                  <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pricing-block card text-center bg-primary">
                <svg x="0" y="0" viewBox="0 0 360 220">
                  <g>
                    <path fill="#3a55c5" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061                                          c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243                                          s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48                                          L0.732,193.75z"></path>
                  </g>
                  <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="78.4489">$20</text>
                  <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                  <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text>
                </svg>
                <div class="pricing-inner">
                  <h3>Business</h3>
                  <ul class="pricing-inner">
                    <li>
                      <h6><b>60GB</b> Disk Space</h6>
                    </li>
                    <li>
                      <h6><b>60</b> Email Accounts</h6>
                    </li>
                    <li>
                      <h6><b>60GB</b> Bandwidth</h6>
                    </li>
                    <li>
                      <h6><b>15</b> Subdomains</h6>
                    </li>
                    <li>
                      <h6><b>20</b> Domains</h6>
                    </li>
                  </ul>
                  <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pricing-block card text-center">
                <svg x="0" y="0" viewBox="0 0 360 220">
                  <g>
                    <path fill="#4466f2" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061                                          c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243                                          s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48                                          L0.732,193.75z"></path>
                  </g>
                  <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="78.4489">$30</text>
                  <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                  <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text>
                </svg>
                <div class="pricing-inner">
                  <h3 class="font-primary">Premium</h3>
                  <ul class="pricing-inner">
                    <li>
                      <h6><b>60GB</b> Disk Space</h6>
                    </li>
                    <li>
                      <h6><b>60</b> Email Accounts</h6>
                    </li>
                    <li>
                      <h6><b>60GB</b> Bandwidth</h6>
                    </li>
                    <li>
                      <h6><b>15</b> Subdomains</h6>
                    </li>
                    <li>
                      <h6><b>20</b> Domains</h6>
                    </li>
                  </ul>
                  <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header"> 
          <h5>Pricing Table With Ribbons</h5>
        </div>
        <div class="card-body pricing-card-design-3">
          <div class="row pricing-content-ribbons">
            <div class="col-md-4">
              <div class="pricing-block card text-center">
                <div class="ribbon ribbon-bookmark ribbon-vertical-left ribbon-danger"><i class="icofont icofont-love"></i></div>
                <svg x="0" y="0" viewBox="0 0 360 220">
                  <g>
                    <path fill="#4466f2" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061                                          c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243                                          s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48                                          L0.732,193.75z"></path>
                  </g>
                  <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="78.4489">$10</text>
                  <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                  <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text>
                </svg>
                <div class="pricing-inner">
                  <h3 class="font-primary">Standard</h3>
                  <ul class="pricing-inner">
                    <li>
                      <h6><b>50GB</b> Disk Space</h6>
                    </li>
                    <li>
                      <h6><b>50</b> Email Accounts</h6>
                    </li>
                    <li>
                      <h6><b>50GB</b> Bandwidth</h6>
                    </li>
                    <li>
                      <h6><b>10</b> Subdomains</h6>
                    </li>
                    <li>
                      <h6><b>15</b> Domains</h6>
                    </li>
                  </ul>
                  <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pricing-block card text-center">
                <svg x="0" y="0" viewBox="0 0 360 220">
                  <g>
                    <path fill="#4466f2" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061                                          c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243                                          s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48                                          L0.732,193.75z"></path>
                  </g>
                  <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="78.4489">$20</text>
                  <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                  <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text>
                </svg>
                <div class="pricing-inner">
                  <h3 class="font-primary">Business</h3>
                  <ul class="pricing-inner">
                    <li>
                      <h6><b>60GB</b> Disk Space</h6>
                    </li>
                    <li>
                      <h6><b>60</b> Email Accounts</h6>
                    </li>
                    <li>
                      <h6><b>60GB</b> Bandwidth</h6>
                    </li>
                    <li>
                      <h6><b>15</b> Subdomains</h6>
                    </li>
                    <li>
                      <h6><b>20</b> Domains</h6>
                    </li>
                  </ul>
                  <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pricing-block card text-center">
                <svg x="0" y="0" viewBox="0 0 360 220">
                  <g>
                    <path fill="#4466f2" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061                                          c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243                                          s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48                                          L0.732,193.75z"></path>
                  </g>
                  <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="78.4489">$30</text>
                  <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                  <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text>
                </svg>
                <div class="pricing-inner">
                  <h3 class="font-primary">Premium</h3>
                  <ul class="pricing-inner">
                    <li>
                      <h6><b>60GB</b> Disk Space</h6>
                    </li>
                    <li>
                      <h6><b>60</b> Email Accounts</h6>
                    </li>
                    <li>
                      <h6><b>60GB</b> Bandwidth</h6>
                    </li>
                    <li>
                      <h6><b>15</b> Subdomains</h6>
                    </li>
                    <li>
                      <h6><b>20</b> Domains</h6>
                    </li>
                  </ul>
                  <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pricing-block card text-center">
                <svg x="0" y="0" viewBox="0 0 360 220">
                  <g>
                    <path fill="#4466f2" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061                                          c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243                                          s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48                                          L0.732,193.75z"></path>
                  </g>
                  <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="78.4489">$10</text>
                  <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                  <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text>
                </svg>
                <div class="pricing-inner">
                  <h3 class="font-primary">Standard</h3>
                  <ul class="pricing-inner">
                    <li>
                      <h6><b>50GB</b> Disk Space</h6>
                    </li>
                    <li>
                      <h6><b>50</b> Email Accounts</h6>
                    </li>
                    <li>
                      <h6><b>50GB</b> Bandwidth</h6>
                    </li>
                    <li>
                      <h6><b>10</b> Subdomains</h6>
                    </li>
                    <li>
                      <h6><b>15</b> Domains</h6>
                    </li>
                  </ul>
                  <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pricing-block card text-center">
                <div class="ribbon ribbon-bookmark ribbon-danger">Popular</div>
                <svg x="0" y="0" viewBox="0 0 360 220">
                  <g>
                    <path fill="#4466f2" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061                                          c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243                                          s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48                                          L0.732,193.75z"></path>
                  </g>
                  <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="78.4489">$20</text>
                  <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                  <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text>
                </svg>
                <div class="pricing-inner">
                  <h3 class="font-primary">Business</h3>
                  <ul class="pricing-inner">
                    <li>
                      <h6><b>60GB</b> Disk Space</h6>
                    </li>
                    <li>
                      <h6><b>60</b> Email Accounts</h6>
                    </li>
                    <li>
                      <h6><b>60GB</b> Bandwidth</h6>
                    </li>
                    <li>
                      <h6><b>15</b> Subdomains</h6>
                    </li>
                    <li>
                      <h6><b>20</b> Domains</h6>
                    </li>
                  </ul>
                  <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pricing-block card text-center">
                <svg x="0" y="0" viewBox="0 0 360 220">
                  <g>
                    <path fill="#4466f2" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061                                          c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243                                          s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48                                          L0.732,193.75z"></path>
                  </g>
                  <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="78.4489">$30</text>
                  <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                  <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text>
                </svg>
                <div class="pricing-inner">
                  <h3 class="font-primary">Premium</h3>
                  <ul class="pricing-inner">
                    <li>
                      <h6><b>60GB</b> Disk Space</h6>
                    </li>
                    <li>
                      <h6><b>60</b> Email Accounts</h6>
                    </li>
                    <li>
                      <h6><b>60GB</b> Bandwidth</h6>
                    </li>
                    <li>
                      <h6><b>15</b> Subdomains</h6>
                    </li>
                    <li>
                      <h6><b>20</b> Domains</h6>
                    </li>
                  </ul>
                  <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pricing-block card text-center">
                <svg x="0" y="0" viewBox="0 0 360 220">
                  <g>
                    <path fill="#4466f2" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061                                          c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243                                          s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48                                          L0.732,193.75z"></path>
                  </g>
                  <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="78.4489">$10</text>
                  <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                  <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text>
                </svg>
                <div class="pricing-inner">
                  <h3 class="font-primary">Standard</h3>
                  <ul class="pricing-inner">
                    <li>
                      <h6><b>50GB</b> Disk Space</h6>
                    </li>
                    <li>
                      <h6><b>50</b> Email Accounts</h6>
                    </li>
                    <li>
                      <h6><b>50GB</b> Bandwidth</h6>
                    </li>
                    <li>
                      <h6><b>10</b> Subdomains</h6>
                    </li>
                    <li>
                      <h6><b>15</b> Domains</h6>
                    </li>
                  </ul>
                  <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pricing-block card text-center">
                <svg x="0" y="0" viewBox="0 0 360 220">
                  <g>
                    <path fill="#4466f2" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061                                          c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243                                          s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48                                          L0.732,193.75z"></path>
                  </g>
                  <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="78.4489">$20</text>
                  <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                  <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text>
                </svg>
                <div class="pricing-inner">
                  <h3 class="font-primary">Business</h3>
                  <ul class="pricing-inner">
                    <li>
                      <h6><b>60GB</b> Disk Space</h6>
                    </li>
                    <li>
                      <h6><b>60</b> Email Accounts</h6>
                    </li>
                    <li>
                      <h6><b>60GB</b> Bandwidth</h6>
                    </li>
                    <li>
                      <h6><b>15</b> Subdomains</h6>
                    </li>
                    <li>
                      <h6><b>20</b> Domains</h6>
                    </li>
                  </ul>
                  <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pricing-block card text-center">
                <div class="ribbon ribbon-clip-right ribbon-right ribbon-danger">Popular</div>
                <svg x="0" y="0" viewBox="0 0 360 220">
                  <g>
                    <path fill="#4466f2" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061                                          c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243                                          s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48                                          L0.732,193.75z"></path>
                  </g>
                  <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="78.4489">$30</text>
                  <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                  <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text>
                </svg>
                <div class="pricing-inner">
                  <h3 class="font-primary">Premium</h3>
                  <ul class="pricing-inner">
                    <li>
                      <h6><b>60GB</b> Disk Space</h6>
                    </li>
                    <li>
                      <h6><b>60</b> Email Accounts</h6>
                    </li>
                    <li>
                      <h6><b>60GB</b> Bandwidth</h6>
                    </li>
                    <li>
                      <h6><b>15</b> Subdomains</h6>
                    </li>
                    <li>
                      <h6><b>20</b> Domains</h6>
                    </li>
                  </ul>
                  <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->
@endsection
@section('script')
<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>

@endsection