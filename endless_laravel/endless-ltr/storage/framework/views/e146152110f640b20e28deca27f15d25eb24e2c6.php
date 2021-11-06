
<?php $__env->startSection('title', 'Tree View | Endless Admin Panel'); ?>
<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/tree.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title', 'Tree View'); ?>
<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Advance</li>
<li class="breadcrumb-item active">Tree View</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col-xl-6">
      <div class="card">
        <div class="card-header">
          <h5>Basic Tree</h5>
        </div>
        <div class="card-body">
          <div id="treeBasic">
            <ul>
              <li>Admin
                <ul>
                  <li data-jstree="{&quot;opened&quot;:true}">Assets
                    <ul>
                      <li data-jstree="{&quot;opened&quot;:false}">Css
                        <ul>
                          <li data-jstree="{&quot;selected&quot;:false,&quot;type&quot;:&quot;file&quot;}">Css one</li>
                          <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Css two</li>
                        </ul>
                      </li>
                      <li data-jstree="{&quot;opened&quot;:true}">Js
                        <ul>
                          <li data-jstree="{&quot;selected&quot;:true,&quot;type&quot;:&quot;file&quot;}">Js one</li>
                          <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Js two</li>
                        </ul>
                      </li>
                      <li data-jstree="{&quot;opened&quot;:true}">Scss
                        <ul>
                          <li data-jstree="{&quot;opened&quot;:false}">Sub Child
                            <ul>
                              <li data-jstree="{&quot;selected&quot;:false,&quot;type&quot;:&quot;file&quot;}">Sub File</li>
                              <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Sub File</li>
                            </ul>
                          </li>
                          <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Scss two</li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li data-jstree="{&quot;opened&quot;:true}">Default
                    <ul>
                      <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Dashboard</li>
                      <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Typography</li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">index file</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6">
      <div class="card">
        <div class="card-header">
          <h5>Checkbox Tree</h5>
        </div>
        <div class="card-body">
          <div id="treecheckbox">
            <ul>
              <li>Admin
                <ul>
                  <li data-jstree="{&quot;opened&quot;:true}">Assets
                    <ul>
                      <li data-jstree="{&quot;opened&quot;:false}">Css
                        <ul>
                          <li data-jstree="{&quot;selected&quot;:false,&quot;type&quot;:&quot;file&quot;}">Css one</li>
                          <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Css two</li>
                        </ul>
                      </li>
                      <li data-jstree="{&quot;opened&quot;:true}">Js
                        <ul>
                          <li data-jstree="{&quot;selected&quot;:true,&quot;type&quot;:&quot;file&quot;}">Js one</li>
                          <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Js two</li>
                        </ul>
                      </li>
                      <li data-jstree="{&quot;opened&quot;:true}">Scss
                        <ul>
                          <li data-jstree="{&quot;opened&quot;:false}">Sub Child
                            <ul>
                              <li data-jstree="{&quot;selected&quot;:false,&quot;type&quot;:&quot;file&quot;}">Sub File</li>
                              <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Sub File</li>
                            </ul>
                          </li>
                          <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Scss two</li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li data-jstree="{&quot;opened&quot;:true}">Default
                    <ul>
                      <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Dashboard</li>
                      <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Typography</li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">index file</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6">
      <div class="card">
        <div class="card-header">
          <h5>Drag Tree</h5>
        </div>
        <div class="card-body">
          <div id="dragTree">
            <ul>
              <li>Admin
                <ul>
                  <li data-jstree="{&quot;opened&quot;:true}">Assets
                    <ul>
                      <li data-jstree="{&quot;opened&quot;:false}">Css
                        <ul>
                          <li data-jstree="{&quot;selected&quot;:false,&quot;type&quot;:&quot;file&quot;}">Css one</li>
                          <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Css two</li>
                        </ul>
                      </li>
                      <li data-jstree="{&quot;opened&quot;:true}">Js
                        <ul>
                          <li data-jstree="{&quot;selected&quot;:true,&quot;type&quot;:&quot;file&quot;}">Js one</li>
                          <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Js two</li>
                        </ul>
                      </li>
                      <li data-jstree="{&quot;opened&quot;:true}">Scss
                        <ul>
                          <li data-jstree="{&quot;opened&quot;:false}">Sub Child
                            <ul>
                              <li data-jstree="{&quot;selected&quot;:false,&quot;type&quot;:&quot;file&quot;}">Sub File</li>
                              <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Sub File</li>
                            </ul>
                          </li>
                          <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Scss two</li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li data-jstree="{&quot;opened&quot;:true}">Default
                    <ul>
                      <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Dashboard</li>
                      <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Typography</li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">index file</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6">
      <div class="card">
        <div class="card-header">
          <h5>Contextmenu Tree</h5>
        </div>
        <div class="card-body">
          <div id="contextmenu">
            <ul>
              <li>Admin
                <ul>
                  <li data-jstree="{&quot;opened&quot;:true}">Assets
                    <ul>
                      <li data-jstree="{&quot;opened&quot;:false}">Css
                        <ul>
                          <li data-jstree="{&quot;selected&quot;:false,&quot;type&quot;:&quot;file&quot;}">Css one</li>
                          <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Css two</li>
                        </ul>
                      </li>
                      <li data-jstree="{&quot;opened&quot;:true}">Js
                        <ul>
                          <li data-jstree="{&quot;selected&quot;:true,&quot;type&quot;:&quot;file&quot;}">Js one</li>
                          <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Js two</li>
                        </ul>
                      </li>
                      <li data-jstree="{&quot;opened&quot;:true}">Scss
                        <ul>
                          <li data-jstree="{&quot;opened&quot;:false}">Sub Child
                            <ul>
                              <li data-jstree="{&quot;selected&quot;:false,&quot;type&quot;:&quot;file&quot;}">Sub File</li>
                              <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Sub File</li>
                            </ul>
                          </li>
                          <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Scss two</li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li data-jstree="{&quot;opened&quot;:true}">Default
                    <ul>
                      <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Dashboard</li>
                      <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Typography</li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">index file</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('assets/js/tree/jstree.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/tree/tree.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ekta/backup/html Theme/laravel endless/endless-ltr/resources/views/advance/tree.blade.php ENDPATH**/ ?>