@extends('layouts.master')
@section('title', 'Validation Forms | Endless Admin Panel')
@section('styles')

@endsection

@section('breadcrumb-title', 'Validation Forms')
@section('breadcrumb-items')
<li class="breadcrumb-item">Forms</li>
<li class="breadcrumb-item">Form Controls</li>
<li class="breadcrumb-item active">Validation Forms</li>
@endsection

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Custom styles</h5><span>For custom Bootstrap form validation messages, you’ll need to add the <code class="text-danger">novalidate</code> boolean attribute to your <code class="text-danger">&lt;form&gt;</code>. This disables the browser default feedback tooltips, but still provides access to the form validation APIs in JavaScript. Try to submit the form below; our JavaScript will intercept the submit button and relay feedback to you.</span><span>When attempting to submit, you’ll see the <code class="text-danger">:invalid </code> and <code class="text-danger">:valid </code> styles applied to your form controls.</span>
        </div>
        <div class="card-body">
          <form class="needs-validation" novalidate="">
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationCustom01">First name</label>
                <input class="form-control" id="validationCustom01" type="text" placeholder="First name" required="">
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Last name</label>
                <input class="form-control" id="validationCustom02" type="text" placeholder="Last name" required="">
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Username</label>
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend">@</span></div>
                  <input class="form-control" id="validationCustomUsername" type="text" placeholder="Username" aria-describedby="inputGroupPrepend" required="">
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom03">City</label>
                <input class="form-control" id="validationCustom03" type="text" placeholder="City" required="">
                <div class="invalid-feedback">Please provide a valid city.</div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom04">State</label>
                <input class="form-control" id="validationCustom04" type="text" placeholder="State" required="">
                <div class="invalid-feedback">Please provide a valid state.</div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom05">Zip</label>
                <input class="form-control" id="validationCustom05" type="text" placeholder="Zip" required="">
                <div class="invalid-feedback">Please provide a valid zip.</div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <div class="checkbox p-0">
                  <input class="form-check-input" id="invalidCheck" type="checkbox" required="">
                  <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
                </div>
                <div class="invalid-feedback">You must agree before submitting.</div>
              </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
          </form>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h5>Browser defaults</h5><span>Not interested in custom validation feedback messages or writing JavaScript to change form behaviors? All good, you can use the browser defaults. Try submitting the form below. Depending on your browser and OS, you’ll see a slightly different style of feedback.</span><span>While these feedback styles cannot be styled with CSS, you can still customize the feedback text through JavaScript.</span>
        </div>
        <div class="card-body">
          <form>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationDefault01">First name</label>
                <input class="form-control" id="validationDefault01" type="text" placeholder="First name" required="">
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefault02">Last name</label>
                <input class="form-control" id="validationDefault02" type="text" placeholder="Last name" required="">
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefaultUsername">Username</label>
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend2">@</span></div>
                  <input class="form-control" id="validationDefaultUsername" type="text" placeholder="Username" aria-describedby="inputGroupPrepend2" required="">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault03">City</label>
                <input class="form-control" id="validationDefault03" type="text" placeholder="City" required="">
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationDefault04">State</label>
                <input class="form-control" id="validationDefault04" type="text" placeholder="State" required="">
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationDefault05">Zip</label>
                <input class="form-control" id="validationDefault05" type="text" placeholder="Zip" required="">
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <div class="checkbox p-0">
                  <input class="form-check-input" id="invalidCheck2" type="checkbox" required="">
                  <label class="form-check-label" for="invalidCheck2">Agree to terms and conditions</label>
                </div>
              </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
          </form>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h5>Supported elements</h5><span>Not interested in custom validation feedback messages or writing JavaScript to change form behaviors? All good, you can use the browser defaults. Try submitting the form below. Depending on your browser and OS, you’ll see a slightly different style of feedback.</span><span>While these feedback styles cannot be styled with CSS, you can still customize the feedback text through JavaScript.</span>
        </div>
        <div class="card-body">
          <form class="was-validated">
            <div class="custom-control custom-checkbox mb-3">
              <input class="custom-control-input" id="customControlValidation1" type="checkbox" required="">
              <label class="custom-control-label" for="customControlValidation1">Check this custom checkbox</label>
              <div class="invalid-feedback">Example invalid feedback text</div>
            </div>
            <div class="custom-control custom-radio">
              <input class="custom-control-input" id="customControlValidation2" type="radio" name="radio-stacked" required="">
              <label class="custom-control-label" for="customControlValidation2">Toggle this custom radio</label>
            </div>
            <div class="custom-control custom-radio mb-3">
              <input class="custom-control-input" id="customControlValidation3" type="radio" name="radio-stacked" required="">
              <label class="custom-control-label" for="customControlValidation3">Or toggle this other custom radio</label>
              <div class="invalid-feedback">More example invalid feedback text</div>
            </div>
            <div class="form-group">
              <select class="custom-select" required="">
                <option value="">Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
              <div class="invalid-feedback">Example invalid custom select feedback</div>
            </div>
            <div class="custom-file">
              <input class="custom-file-input" id="validatedCustomFile" type="file" required="">
              <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
              <div class="invalid-feedback">Example invalid custom file feedback</div>
            </div>
          </form>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h5>Tooltips</h5><span>If your form layout allows it, you can swap the <code class="text-danger">.{valid|invalid}-feedback</code> classes for <code class="text-danger">.{valid|invalid}-tooltip</code> classes to display validation feedback in a styled tooltip. Be sure to have a parent with <code class="text-danger">position: relative</code> on it for tooltip positioning. In the example below, our column classes have this already, but your project may require an alternative setup.</span>
        </div>
        <div class="card-body">
          <form class="needs-validation" novalidate="">
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationTooltip01">First name</label>
                <input class="form-control" id="validationTooltip01" type="text" placeholder="First name" required="">
                <div class="valid-tooltip">Looks good!</div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationTooltip02">Last name</label>
                <input class="form-control" id="validationTooltip02" type="text" placeholder="Last name" required="">
                <div class="valid-tooltip">Looks good!</div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationTooltipUsername">Username</label>
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text" id="validationTooltipUsernamePrepend">@</span></div>
                  <input class="form-control" id="validationTooltipUsername" type="text" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required="">
                  <div class="invalid-tooltip">Please choose a unique and valid username.</div>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationTooltip03">City</label>
                <input class="form-control" id="validationTooltip03" type="text" placeholder="City" required="">
                <div class="invalid-tooltip">Please provide a valid city.</div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationTooltip04">State</label>
                <input class="form-control" id="validationTooltip04" type="text" placeholder="State" required="">
                <div class="invalid-tooltip">Please provide a valid state.</div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationTooltip05">Zip</label>
                <input class="form-control" id="validationTooltip05" type="text" placeholder="Zip" required="">
                <div class="invalid-tooltip">Please provide a valid zip.</div>
              </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->
@endsection
@section('scripts')
<script src="{{asset('assets/js/form-validation-custom.js')}}"></script>
@endsection