@extends('layouts.master')
@section('title', 'Server | Endless - Premium Admin Template')
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
@endsection

@section('breadcrumb-title', 'Server')
@section('breadcrumb-items')
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item active">Server</li>
@endsection
  
@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-3 xl-50 col-sm-6 set-col-6">
      <div class="card server-card-bg">
        <div class="card-body server-widgets">
          <div class="media"><i data-feather="codepen"></i>
            <div class="top-server">
              <h6 class="mb-0">Storage</h6>
            </div>
          </div>
          <div class="bottom-server">
            <h5 class="mb-0">85GB / <span>100Gb</span></h5>
          </div>
          <div class="progress">
            <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 xl-50 col-sm-6 set-col-6">
      <div class="card server-card-bg">
        <div class="card-body server-widgets">
          <div class="media"><i data-feather="clock"></i>
            <div class="top-server">
              <h6 class="mb-0">Latency</h6>
            </div>
          </div>
          <div class="bottom-server mb-0">
            <h5 class="mb-0"><span class="second-color counter">40</span>ms</h5>
          </div>
        </div>
        <div class="server-chart">
          <div class="flot-chart-placeholder" id="latency-chart"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 xl-50 col-sm-6 set-col-6">
      <div class="card server-card-bg">
        <div class="card-body server-widgets">
          <div class="media"><i data-feather="server"></i>
            <div class="top-server">
              <h6 class="mb-0">Bandwidth</h6>
            </div>
          </div>
          <div class="bottom-server">
            <h5 class="mb-0">75GB / <span>100Gb</span></h5>
          </div>
          <div class="progress">
            <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 xl-50 col-sm-6 set-col-6">
      <div class="card server-card-bg">
        <div class="card-body server-widgets">
          <div class="media"><i data-feather="anchor"></i>
            <div class="top-server">
              <h6 class="mb-0">Cluster Load</h6>
            </div>
          </div>
          <div class="bottom-server">
            <h5 class="mb-0">70% <span><i data-feather="trending-down"></i></span></h5>
          </div>
          <div class="last-server">
            <h6 class="mb-0 f-14">Lower than average</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Live CPU Usage</h5>
          <div class="card-header-right">
            <ul class="list-unstyled card-option">
              <li><i class="icofont icofont-simple-left"></i></li>
              <li><i class="view-html fa fa-code"></i></li>
              <li><i class="icofont icofont-maximize full-card"></i></li>
              <li><i class="icofont icofont-minus minimize-card"></i></li>
              <li><i class="icofont icofont-refresh reload-card"></i></li>
              <li><i class="icofont icofont-error close-card"></i></li>
            </ul>
          </div>
        </div>
        <div class="card-body chart-block">
          <div class="server-chart-container">
            <div class="flot-chart-placeholder" id="cpu-updating"></div>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body chart-block"&gt;
&lt;div class="server-chart-container"&gt;
&lt;div id="cpu-updating" class="flot-chart-placeholder"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Memory Usage</h5>
          <div class="card-header-right">
            <ul class="list-unstyled card-option">
              <li><i class="icofont icofont-simple-left"></i></li>
              <li><i class="view-html fa fa-code"></i></li>
              <li><i class="icofont icofont-maximize full-card"></i></li>
              <li><i class="icofont icofont-minus minimize-card"></i></li>
              <li><i class="icofont icofont-refresh reload-card"></i></li>
              <li><i class="icofont icofont-error close-card"></i></li>
            </ul>
          </div>
        </div>
        <div class="card-body server-canvas">
          <canvas id="myGraph"></canvas>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body server-canvas"&gt;
&lt;canvas id="myGraph"&gt;&lt;/canvas&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-8 xl-100 set-col-7">
      <div class="card">
        <div class="card-header server-header">
          <h5 class="d-inline-block">Process Explorer</h5><span class="badge badge-primary m-l-10 d-inline-block mt-0">57 Process</span>
          <div class="card-header-right">
            <ul class="list-unstyled card-option">
              <li><i class="icofont icofont-simple-left"></i></li>
              <li><i class="view-html fa fa-code"></i></li>
              <li><i class="icofont icofont-maximize full-card"></i></li>
              <li><i class="icofont icofont-minus minimize-card"></i></li>
              <li><i class="icofont icofont-refresh reload-card"></i></li>
              <li><i class="icofont icofont-error close-card"></i></li>
            </ul>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="display" id="basic-1">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>User</th>
                  <th>Avg. Io</th>
                  <th>Avg. CPU</th>
                  <th>Avg. Mem</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Tiger</td>
                  <td><span class="badge badge-primary">Tig</span></td>
                  <td>0 KB/s</td>
                  <td>0 %</td>
                  <td>50 MB</td>
                </tr>
                <tr>
                  <td>Garrett</td>
                  <td><span class="badge badge-secondary">Great</span></td>
                  <td>0.54 KB/s</td>
                  <td>0.20 %</td>
                  <td>1 MB</td>
                </tr>
                <tr>
                  <td>Ashton</td>
                  <td><span class="badge badge-primary">Root</span></td>
                  <td>20 KB/s</td>
                  <td>0.50 %</td>
                  <td>13 MB</td>
                </tr>
                <tr>
                  <td>Cedric</td>
                  <td><span class="badge badge-secondary">Ced</span></td>
                  <td>50 KB/s</td>
                  <td>0.40 %</td>
                  <td>25 MB</td>
                </tr>
                <tr>
                  <td>Airi</td>
                  <td><span class="badge badge-primary">Airi</span></td>
                  <td>0.40 KB/s</td>
                  <td>0 %</td>
                  <td>13 MB</td>
                </tr>
                <tr>
                  <td>Brielle</td>
                  <td><span class="badge badge-secondary">Brie</span></td>
                  <td>25 KB/s</td>
                  <td>0.60 %</td>
                  <td>25 MB</td>
                </tr>
                <tr>
                  <td>Herrod</td>
                  <td><span class="badge badge-primary">Herr</span></td>
                  <td>57 KB/s</td>
                  <td>0 %</td>
                  <td>1 MB</td>
                </tr>
                <tr>
                  <td>Rhona</td>
                  <td><span class="badge badge-secondary">Rho</span></td>
                  <td>24 KB/s</td>
                  <td>0 %</td>
                  <td>1 MB</td>
                </tr>
                <tr>
                  <td>Colleen</td>
                  <td><span class="badge badge-primary">Coll</span></td>
                  <td>0 KB/s</td>
                  <td>0 %</td>
                  <td>14 MB</td>
                </tr>
                <tr>
                  <td>Sonya</td>
                  <td><span class="badge badge-secondary">Sony</span></td>
                  <td>0 KB/s</td>
                  <td>0 %</td>
                  <td>13 MB</td>
                </tr>
                <tr>
                  <td>Jena</td>
                  <td><span class="badge badge-primary">Jen</span></td>
                  <td>0 KB/s</td>
                  <td>0 %</td>
                  <td>1 MB</td>
                </tr>
                <tr>
                  <td>Quinn</td>
                  <td><span class="badge badge-secondary">Quin</span></td>
                  <td>75 KB/s</td>
                  <td>0.50 %</td>
                  <td>42 MB</td>
                </tr>
                <tr>
                  <td>Charde</td>
                  <td><span class="badge badge-primary">Char</span></td>
                  <td>30 KB/s</td>
                  <td>0.20 %</td>
                  <td>10 MB</td>
                </tr>
                <tr>
                  <td>Haley</td>
                  <td><span class="badge badge-secondary">Hal</span></td>
                  <td>56 KB/s</td>
                  <td>0.10 %</td>
                  <td>20 MB</td>
                </tr>
                <tr>
                  <td>Tatyana</td>
                  <td><span class="badge badge-primary">Taty</span></td>
                  <td>20 KB/s</td>
                  <td>0.80 %</td>
                  <td>77 MB</td>
                </tr>
                <tr>
                  <td>Michael</td>
                  <td><span class="badge badge-secondary">Micha</span></td>
                  <td>0 KB/s</td>
                  <td>0.70 %</td>
                  <td>30 MB</td>
                </tr>
                <tr>
                  <td>Paul</td>
                  <td><span class="badge badge-primary">Paul</span></td>
                  <td>0 KB/s</td>
                  <td>0.50 %</td>
                  <td>11 MB</td>
                </tr>
                <tr>
                  <td>Gloria</td>
                  <td><span class="badge badge-secondary">Glori</span></td>
                  <td>65 KB/s</td>
                  <td>0.20 %</td>
                  <td>1 MB</td>
                </tr>
                <tr>
                  <td>Bradley</td>
                  <td><span class="badge badge-primary">Bradl</span></td>
                  <td>40 KB/s</td>
                  <td>0 %</td>
                  <td>15 MB</td>
                </tr>
                <tr>
                  <td>Dai</td>
                  <td><span class="badge badge-secondary">Da</span></td>
                  <td>10 KB/s</td>
                  <td>0 %</td>
                  <td>15 MB</td>
                </tr>
                <tr>
                  <td>Jenette</td>
                  <td><span class="badge badge-primary">Jene</span></td>
                  <td>37 KB/s</td>
                  <td>0.30 %</td>
                  <td>20 MB</td>
                </tr>
                <tr>
                  <td>Yuri</td>
                  <td><span class="badge badge-secondary">Yur</span></td>
                  <td>0 KB/s</td>
                  <td>0 %</td>
                  <td>25 MB</td>
                </tr>
                <tr>
                  <td>Caesar</td>
                  <td><span class="badge badge-primary">Caes</span></td>
                  <td>0 KB/s</td>
                  <td>0 %</td>
                  <td>20 MB</td>
                </tr>
                <tr>
                  <td>Doris</td>
                  <td><span class="badge badge-secondary">Dori</span></td>
                  <td>38 KB/s</td>
                  <td>0.10 %</td>
                  <td>14 MB</td>
                </tr>
                <tr>
                  <td>Angelica</td>
                  <td><span class="badge badge-primary">Angel</span></td>
                  <td>40 KB/s</td>
                  <td>0.50 %</td>
                  <td>1 MB</td>
                </tr>
                <tr>
                  <td>Gavin</td>
                  <td><span class="badge badge-secondary">Gavi</span></td>
                  <td>0 KB/s</td>
                  <td>0.20 %</td>
                  <td>1 MB</td>
                </tr>
                <tr>
                  <td>Jennifer</td>
                  <td><span class="badge badge-primary">Jeni</span></td>
                  <td>0 KB/s</td>
                  <td>0 %</td>
                  <td>20 MB</td>
                </tr>
                <tr>
                  <td>Brenden</td>
                  <td><span class="badge badge-secondary">Bren</span></td>
                  <td>16 KB/s</td>
                  <td>0 %</td>
                  <td>23 MB</td>
                </tr>
                <tr>
                  <td>Fiona</td>
                  <td><span class="badge badge-primary">Fio</span></td>
                  <td>50 KB/s</td>
                  <td>0.30 %</td>
                  <td>75 MB</td>
                </tr>
                <tr>
                  <td>Shou</td>
                  <td><span class="badge badge-primary">Sho</span></td>
                  <td>37 KB/s</td>
                  <td>0.20 %</td>
                  <td>22 MB</td>
                </tr>
                <tr>
                  <td>Michelle</td>
                  <td><span class="badge badge-primary">Mich</span></td>
                  <td>0 KB/s</td>
                  <td>0.50 %</td>
                  <td>16 MB</td>
                </tr>
                <tr>
                  <td>Suki</td>
                  <td><span class="badge badge-secondary">Suk</span></td>
                  <td>0 KB/s</td>
                  <td>0 %</td>
                  <td>42 MB</td>
                </tr>
                <tr>
                  <td>Prescott</td>
                  <td><span class="badge badge-primary">Pres</span></td>
                  <td>56 KB/s</td>
                  <td>0.27 %</td>
                  <td>1 MB</td>
                </tr>
                <tr>
                  <td>Gavin</td>
                  <td><span class="badge badge-secondary">Gavi</span></td>
                  <td>0 KB/s</td>
                  <td>0.22 %</td>
                  <td>70 MB</td>
                </tr>
                <tr>
                  <td>Martena</td>
                  <td><span class="badge badge-primary">Mart</span></td>
                  <td>0 KB/s</td>
                  <td>0 %</td>
                  <td>20 MB</td>
                </tr>
                <tr>
                  <td>Unity</td>
                  <td><span class="badge badge-primary">Unity</span></td>
                  <td>0 KB/s</td>
                  <td>0 %</td>
                  <td>1 MB</td>
                </tr>
                <tr>
                  <td>Howard</td>
                  <td><span class="badge badge-secondary">Howa</span></td>
                  <td>65 KB/s</td>
                  <td>0.20 %</td>
                  <td>1 MB</td>
                </tr>
                <tr>
                  <td>Hope</td>
                  <td><span class="badge badge-primary">Hop</span></td>
                  <td>5 KB/s</td>
                  <td>0.04 %</td>
                  <td>145 MB</td>
                </tr>
                <tr>
                  <td>Vivian</td>
                  <td><span class="badge badge-primary">Vivi</span></td>
                  <td>80 KB/s</td>
                  <td>0.50 %</td>
                  <td>25 MB</td>
                </tr>
                <tr>
                  <td>Timothy</td>
                  <td><span class="badge badge-primary">Timo</span></td>
                  <td>50 KB/s</td>
                  <td>0.30 %</td>
                  <td>13 MB</td>
                </tr>
                <tr>
                  <td>Jackson</td>
                  <td><span class="badge badge-secondary">Jack</span></td>
                  <td>37 KB/s</td>
                  <td>0.10 %</td>
                  <td>10 MB</td>
                </tr>
                <tr>
                  <td>Olivia</td>
                  <td><span class="badge badge-primary">Oliv</span></td>
                  <td>0 KB/s</td>
                  <td>0 %</td>
                  <td>7</td>
                </tr>
                <tr>
                  <td>Bruno</td>
                  <td><span class="badge badge-primary">Brun</span></td>
                  <td>37 KB/s</td>
                  <td>0.15 %</td>
                  <td>5 MB</td>
                </tr>
                <tr>
                  <td>Sakura</td>
                  <td><span class="badge badge-secondary">Saku</span></td>
                  <td>50 KB/s</td>
                  <td>0.50 %</td>
                  <td>15 MB</td>
                </tr>
                <tr>
                  <td>Thor</td>
                  <td><span class="badge badge-primary">Tho</span></td>
                  <td>25 KB/s</td>
                  <td>0.10 %</td>
                  <td>80 MB</td>
                </tr>
                <tr>
                  <td>Finn</td>
                  <td><span class="badge badge-primary">Fin</span></td>
                  <td>40 KB/s</td>
                  <td>0.30 %</td>
                  <td>7 MB</td>
                </tr>
                <tr>
                  <td>Serge</td>
                  <td><span class="badge badge-primary">Ser</span></td>
                  <td>60 KB/s</td>
                  <td>0.10 %</td>
                  <td>45 MB</td>
                </tr>
                <tr>
                  <td>Zenaida</td>
                  <td><span class="badge badge-primary">Zen</span></td>
                  <td>37 KB/s</td>
                  <td>0.50 %</td>
                  <td>60 MB</td>
                </tr>
                <tr>
                  <td>Zorita</td>
                  <td><span class="badge badge-primary">Zor</span></td>
                  <td>0 KB/s</td>
                  <td>0 %</td>
                  <td>57 MB</td>
                </tr>
                <tr>
                  <td>Jennifer</td>
                  <td><span class="badge badge-primary">Jenni</span></td>
                  <td>0 KB/s</td>
                  <td>0 %</td>
                  <td>180 MB</td>
                </tr>
                <tr>
                  <td>Cara</td>
                  <td><span class="badge badge-secondary">Car</span></td>
                  <td>50 KB/s</td>
                  <td>0.30 %</td>
                  <td>20 MB</td>
                </tr>
                <tr>
                  <td>Hermione</td>
                  <td><span class="badge badge-primary">Hermi</span></td>
                  <td>37 KB/s</td>
                  <td>0.20 %</td>
                  <td>1 MB</td>
                </tr>
                <tr>
                  <td>Lael</td>
                  <td><span class="badge badge-primary">Lae</span></td>
                  <td>0 KB/s</td>
                  <td>0.10 %</td>
                  <td>50 MB</td>
                </tr>
                <tr>
                  <td>Jonas</td>
                  <td><span class="badge badge-primary">Jon</span></td>
                  <td>12 KB/s</td>
                  <td>0.05 %</td>
                  <td>2 MB</td>
                </tr>
                <tr>
                  <td>Shad</td>
                  <td><span class="badge badge-secondary">Sha</span></td>
                  <td>42 KB/s</td>
                  <td>020 %</td>
                  <td>40 MB</td>
                </tr>
                <tr>
                  <td>Michael</td>
                  <td><span class="badge badge-primary">Mich</span></td>
                  <td>0 KB/s</td>
                  <td>0 %</td>
                  <td>25 MB</td>
                </tr>
                <tr>
                  <td>Donna</td>
                  <td><span class="badge badge-primary">Donn</span></td>
                  <td>37 KB/s</td>
                  <td>0.10 %</td>
                  <td>13 MB</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head2">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="table-responsive"&gt;
&lt;table id="basic-1" class="display"&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th&gt;Name&lt;/th&gt;
&lt;th&gt;User&lt;/th&gt;
&lt;th&gt;Avg. Io&lt;/th&gt;
&lt;th&gt;Avg. CPU&lt;/th&gt;
&lt;th&gt;Avg. Mem&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;Tiger&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Tig&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;0 KB/s&lt;/td&gt;
&lt;td&gt;0 %&lt;/td&gt;
&lt;td&gt;50 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Garrett&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-secondary"&gt;Great&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;0.54 KB/s&lt;/td&gt;
&lt;td&gt;0.20 %&lt;/td&gt;
&lt;td&gt;1 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Ashton&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Root&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;20 KB/s&lt;/td&gt;
&lt;td&gt;0.50 %&lt;/td&gt;
&lt;td&gt;13 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Cedric&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-secondary"&gt;Ced&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;50 KB/s&lt;/td&gt;
&lt;td&gt;0.40 %&lt;/td&gt;
&lt;td&gt;25 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Airi&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Airi&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;0.40 KB/s&lt;/td&gt;
&lt;td&gt;0 %&lt;/td&gt;
&lt;td&gt;13 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Brielle&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-secondary"&gt;Brie&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;25 KB/s&lt;/td&gt;
&lt;td&gt;0.60 %&lt;/td&gt;
&lt;td&gt;25 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Herrod&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Herr&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;57 KB/s&lt;/td&gt;
&lt;td&gt;0 %&lt;/td&gt;
&lt;td&gt;1 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Rhona&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-secondary"&gt;Rho&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;24 KB/s&lt;/td&gt;
&lt;td&gt;0 %&lt;/td&gt;
&lt;td&gt;1 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Colleen&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Coll&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;0 KB/s&lt;/td&gt;
&lt;td&gt;0 %&lt;/td&gt;
&lt;td&gt;14 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Sonya&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-secondary"&gt;Sony&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;0 KB/s&lt;/td&gt;
&lt;td&gt;0 %&lt;/td&gt;
&lt;td&gt;13 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Jena&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Jen&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;0 KB/s&lt;/td&gt;
&lt;td&gt;0 %&lt;/td&gt;
&lt;td&gt;1 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Quinn&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-secondary"&gt;Quin&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;75 KB/s&lt;/td&gt;
&lt;td&gt;0.50 %&lt;/td&gt;
&lt;td&gt;42 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Charde&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Char&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;30 KB/s&lt;/td&gt;
&lt;td&gt;0.20 %&lt;/td&gt;
&lt;td&gt;10 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Haley&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-secondary"&gt;Hal&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;56 KB/s&lt;/td&gt;
&lt;td&gt;0.10 %&lt;/td&gt;
&lt;td&gt;20 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Tatyana&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Taty&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;20 KB/s&lt;/td&gt;
&lt;td&gt;0.80 %&lt;/td&gt;
&lt;td&gt;77 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Michael&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-secondary"&gt;Micha&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;0 KB/s&lt;/td&gt;
&lt;td&gt;0.70 %&lt;/td&gt;
&lt;td&gt;30 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Paul&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Paul&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;0 KB/s&lt;/td&gt;
&lt;td&gt;0.50 %&lt;/td&gt;
&lt;td&gt;11 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Gloria&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-secondary"&gt;Glori&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;65 KB/s&lt;/td&gt;
&lt;td&gt;0.20 %&lt;/td&gt;
&lt;td&gt;1 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Bradley&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Bradl&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;40 KB/s&lt;/td&gt;
&lt;td&gt;0 %&lt;/td&gt;
&lt;td&gt;15 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Dai&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-secondary"&gt;Da&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;10 KB/s&lt;/td&gt;
&lt;td&gt;0 %&lt;/td&gt;
&lt;td&gt;15 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Jenette&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Jene&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;37 KB/s&lt;/td&gt;
&lt;td&gt;0.30 %&lt;/td&gt;
&lt;td&gt;20 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Yuri&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-secondary"&gt;Yur&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;0 KB/s&lt;/td&gt;
&lt;td&gt;0 %&lt;/td&gt;
&lt;td&gt;25 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Caesar&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Caes&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;0 KB/s&lt;/td&gt;
&lt;td&gt;0 %&lt;/td&gt;
&lt;td&gt;20 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Doris&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-secondary"&gt;Dori&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;38 KB/s&lt;/td&gt;
&lt;td&gt;0.10 %&lt;/td&gt;
&lt;td&gt;14 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Angelica&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Angel&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;40 KB/s&lt;/td&gt;
&lt;td&gt;0.50 %&lt;/td&gt;
&lt;td&gt;1 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Gavin&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-secondary"&gt;Gavi&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;0 KB/s&lt;/td&gt;
&lt;td&gt;0.20 %&lt;/td&gt;
&lt;td&gt;1 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Jennifer&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Jeni&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;0 KB/s&lt;/td&gt;
&lt;td&gt;0 %&lt;/td&gt;
&lt;td&gt;20 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Brenden&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-secondary"&gt;Bren&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;16 KB/s&lt;/td&gt;
&lt;td&gt;0 %&lt;/td&gt;
&lt;td&gt;23 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Fiona&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Fio&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;50 KB/s&lt;/td&gt;
&lt;td&gt;0.30 %&lt;/td&gt;
&lt;td&gt;75 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Shou&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Sho&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;37 KB/s&lt;/td&gt;
&lt;td&gt;0.20 %&lt;/td&gt;
&lt;td&gt;22 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Michelle&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Mich&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;0 KB/s&lt;/td&gt;
&lt;td&gt;0.50 %&lt;/td&gt;
&lt;td&gt;16 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Suki&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-secondary"&gt;Suk&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;0 KB/s&lt;/td&gt;
&lt;td&gt;0 %&lt;/td&gt;
&lt;td&gt;42 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Prescott&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Pres&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;56 KB/s&lt;/td&gt;
&lt;td&gt;0.27 %&lt;/td&gt;
&lt;td&gt;1 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Gavin&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-secondary"&gt;Gavi&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;0 KB/s&lt;/td&gt;
&lt;td&gt;0.22 %&lt;/td&gt;
&lt;td&gt;70 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Martena&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Mart&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;0 KB/s&lt;/td&gt;
&lt;td&gt;0 %&lt;/td&gt;
&lt;td&gt;20 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Unity&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Unity&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;0 KB/s&lt;/td&gt;
&lt;td&gt;0 %&lt;/td&gt;
&lt;td&gt;1 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Howard&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-secondary"&gt;Howa&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;65 KB/s&lt;/td&gt;
&lt;td&gt;0.20 %&lt;/td&gt;
&lt;td&gt;1 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Hope&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Hop&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;5 KB/s&lt;/td&gt;
&lt;td&gt;0.04 %&lt;/td&gt;
&lt;td&gt;145 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Vivian&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Vivi&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;80 KB/s&lt;/td&gt;
&lt;td&gt;0.50 %&lt;/td&gt;
&lt;td&gt;25 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Timothy&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Timo&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;50 KB/s&lt;/td&gt;
&lt;td&gt;0.30 %&lt;/td&gt;
&lt;td&gt;13 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Jackson&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-secondary"&gt;Jack&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;37 KB/s&lt;/td&gt;
&lt;td&gt;0.10 %&lt;/td&gt;
&lt;td&gt;10 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Olivia&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Oliv&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;0 KB/s&lt;/td&gt;
&lt;td&gt;0 %&lt;/td&gt;
&lt;td&gt;7&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Bruno&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Brun&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;37 KB/s&lt;/td&gt;
&lt;td&gt;0.15 %&lt;/td&gt;
&lt;td&gt;5 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Sakura&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-secondary"&gt;Saku&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;50 KB/s&lt;/td&gt;
&lt;td&gt;0.50 %&lt;/td&gt;
&lt;td&gt;15 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Thor&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Tho&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;25 KB/s&lt;/td&gt;
&lt;td&gt;0.10 %&lt;/td&gt;
&lt;td&gt;80 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Finn&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Fin&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;40 KB/s&lt;/td&gt;
&lt;td&gt;0.30 %&lt;/td&gt;
&lt;td&gt;7 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Serge&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Ser&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;60 KB/s&lt;/td&gt;
&lt;td&gt;0.10 %&lt;/td&gt;
&lt;td&gt;45 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Zenaida&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Zen&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;37 KB/s&lt;/td&gt;
&lt;td&gt;0.50 %&lt;/td&gt;
&lt;td&gt;60 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Zorita&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Zor&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;0 KB/s&lt;/td&gt;
&lt;td&gt;0 %&lt;/td&gt;
&lt;td&gt;57 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Jennifer&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Jenni&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;0 KB/s&lt;/td&gt;
&lt;td&gt;0 %&lt;/td&gt;
&lt;td&gt;180 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Cara&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-secondary"&gt;Car&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;50 KB/s&lt;/td&gt;
&lt;td&gt;0.30 %&lt;/td&gt;
&lt;td&gt;20 MB&lt;/td
&lt;/tr
&lt;tr&gt;
&lt;td&gt;Hermione&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Hermi&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;37 KB/s&lt;/td&gt;
&lt;td&gt;0.20 %&lt;/td&gt;
&lt;td&gt;1 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Lael&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Lae&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;0 KB/s&lt;/td&gt;
&lt;td&gt;0.10 %&lt;/td&gt;
&lt;td&gt;50 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Jonas&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Jon&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;12 KB/s&lt;/td&gt;
&lt;td&gt;0.05 %&lt;/td&gt;
&lt;td&gt;2 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Shad&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-secondary"&gt;Sha&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;42 KB/s&lt;/td&gt;
&lt;td&gt;020 %&lt;/td&gt;
&lt;td&gt;40 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Michael&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Mich&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;0 KB/s&lt;/td&gt;
&lt;td&gt;0 %&lt;/td&gt;
&lt;td&gt;25 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Donna&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-primary"&gt;Donn&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;37 KB/s&lt;/td&gt;
&lt;td&gt;0.10 %&lt;/td&gt;
&lt;td&gt;13 MB&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 xl-100 set-col-5">
      <div class="card">
        <div class="card-header server-header">
          <h5 class="d-inline-block">I/O Activity</h5><span class="badge badge-primary m-l-10 d-inline-block mt-0">Last 10 Activity</span>
          <div class="card-header-right">
            <ul class="list-unstyled card-option">
              <li><i class="icofont icofont-simple-left"></i></li>
              <li><i class="view-html fa fa-code"></i></li>
              <li><i class="icofont icofont-maximize full-card"></i></li>
              <li><i class="icofont icofont-minus minimize-card"></i></li>
              <li><i class="icofont icofont-refresh reload-card"></i></li>
              <li><i class="icofont icofont-error close-card"></i></li>
            </ul>
          </div>
        </div>
        <div class="card-body">
          <div class="server-activity">
            <div class="media"><i class="font-primary m-r-10" data-feather="arrow-down"></i><span>Brandley</span>
              <div class="media-body text-right"><span>14 KB</span></div>
            </div>
            <div class="media"><i class="font-primary m-r-10" data-feather="arrow-down"></i><span>Cara</span>
              <div class="media-body text-right"><span>5 KB</span></div>
            </div>
            <div class="media"><i class="font-secondary m-r-10" data-feather="arrow-up"></i><span>Airi</span>
              <div class="media-body text-right"><span>15 MB</span></div>
            </div>
            <div class="media"><i class="font-primary m-r-10" data-feather="arrow-up"></i><span>Cedric</span>
              <div class="media-body text-right"><span>4 KB</span></div>
            </div>
            <div class="media"><i class="font-secondary m-r-10" data-feather="arrow-down"></i><span>Cara</span>
              <div class="media-body text-right"><span>20 KB</span></div>
            </div>
            <div class="media"><i class="font-primary m-r-10" data-feather="arrow-up"></i><span>Airi</span>
              <div class="media-body text-right"><span>25 MB</span></div>
            </div>
            <div class="media"><i class="font-primary m-r-10" data-feather="arrow-down"></i><span>Brandley</span>
              <div class="media-body text-right"><span>14 KB</span></div>
            </div>
            <div class="media"><i class="font-primary m-r-10" data-feather="arrow-down"></i><span>Cara</span>
              <div class="media-body text-right"><span>5 KB</span></div>
            </div>
            <div class="media"><i class="font-secondary m-r-10" data-feather="arrow-up"></i><span>Airi</span>
              <div class="media-body text-right"><span>15 MB</span></div>
            </div>
            <div class="media"><i class="font-primary m-r-10" data-feather="arrow-up"></i><span>Cedric</span>
              <div class="media-body text-right"><span>4 KB</span></div>
            </div>
            <div class="media"><i class="font-secondary m-r-10" data-feather="arrow-down"></i><span>Cara</span>
              <div class="media-body text-right"><span>20 KB</span></div>
            </div>
            <div class="media"><i class="font-primary m-r-10" data-feather="arrow-up"></i><span>Airi</span>
              <div class="media-body text-right"><span>25 MB</span></div>
            </div>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head3">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="server-activity"&gt;
&lt;div class="media"&gt;
&lt;i data-feather="arrow-down" class="font-primary m-r-10"&gt;&lt;/i&gt;
&lt;span&gt;Brandley&lt;/span&gt;
&lt;div class="media-body text-right"&gt;
&lt;span&gt;14 KB&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
&lt;i data-feather="arrow-down" class="font-primary m-r-10"&gt;&lt;/i&gt;
&lt;span&gt;Cara&lt;/span&gt;
&lt;div class="media-body text-right"&gt;
&lt;span&gt;5 KB&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
&lt;i data-feather="arrow-up" class="font-secondary m-r-10"&gt;&lt;/i&gt;
&lt;span&gt;Airi&lt;/span&gt;
&lt;div class="media-body text-right"&gt;
&lt;span&gt;15 MB&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
&lt;i data-feather="arrow-up" class="font-primary m-r-10"&gt;&lt;/i&gt;
&lt;span&gt;Cedric&lt;/span&gt;
&lt;div class="media-body text-right"&gt;
&lt;span&gt;4 KB&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
&lt;i data-feather="arrow-down" class="font-secondary m-r-10"&gt;&lt;/i&gt;
&lt;span&gt;Cara&lt;/span&gt;
&lt;div class="media-body text-right"&gt;
&lt;span&gt;20 KB&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
&lt;i data-feather="arrow-up" class="font-primary m-r-10"&gt;&lt;/i&gt;
&lt;span&gt;Airi&lt;/span&gt;
&lt;div class="media-body text-right"&gt;
&lt;span&gt;25 MB&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
&lt;i data-feather="arrow-down" class="font-primary m-r-10"&gt;&lt;/i&gt;
&lt;span&gt;Brandley&lt;/span&gt;
&lt;div class="media-body text-right"&gt;
&lt;span&gt;14 KB&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
&lt;i data-feather="arrow-down" class="font-primary m-r-10"&gt;&lt;/i&gt;
&lt;span&gt;Cara&lt;/span&gt;
&lt;div class="media-body text-right"&gt;
&lt;span&gt;5 KB&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
&lt;i data-feather="arrow-up" class="font-secondary m-r-10"&gt;&lt;/i&gt;
&lt;span&gt;Airi&lt;/span&gt;
&lt;div class="media-body text-right"&gt;
&lt;span&gt;15 MB&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
&lt;i data-feather="arrow-up" class="font-primary m-r-10"&gt;&lt;/i&gt;
&lt;span&gt;Cedric&lt;/span&gt;
&lt;div class="media-body text-right"&gt;
&lt;span&gt;4 KB&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
&lt;i data-feather="arrow-down" class="font-secondary m-r-10"&gt;&lt;/i&gt;
&lt;span&gt;Cara&lt;/span&gt;
&lt;div class="media-body text-right"&gt;
&lt;span&gt;20 KB&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
&lt;i data-feather="arrow-up" class="font-primary m-r-10"&gt;&lt;/i&gt;
&lt;span&gt;Airi&lt;/span&gt;
&lt;div class="media-body text-right"&gt;
&lt;span&gt;25 MB&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->

@endsection
@section('script')
<script src="{{asset('assets/js/chart/chartjs/chart.min.js')}}"></script>
<script src="{{asset('assets/js/chart/flot-chart/excanvas.js')}}"></script>
<script src="{{asset('assets/js/chart/flot-chart/jquery.flot.js')}}"></script>
<script src="{{asset('assets/js/chart/flot-chart/jquery.flot.time.js')}}"></script>
<script src="{{asset('assets/js/chart/flot-chart/jquery.flot.categories.js')}}"></script>
<script src="{{asset('assets/js/chart/flot-chart/jquery.flot.stack.js')}}"></script>
<script src="{{asset('assets/js/chart/flot-chart/jquery.flot.pie.js')}}"></script>
<script src="{{asset('assets/js/chart/flot-chart/jquery.flot.symbol.js')}}"></script>
<script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
<script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
<script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
<script src="{{asset('assets/js/dashboard/server-custom.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>

@endsection