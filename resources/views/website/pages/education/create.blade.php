@extends('website.layouts.master')

@section('title')
    {{ $title ?? 'Portofolio' }}
@endsection

@push('styles')
    {{-- Customize your style --}}
@endpush

@section('content')
    @component('website.components.breadcrumb')
        @slot('titleContent')
            {{ $titleContent ?? 'Title Content' }}
        @endslot
        @slot('li_1')
            {{ $li_1 ?? 'Li 1' }}
        @endslot
        @slot('subTitleContent')
            {{ $subTitleContent ?? 'Sub Title Content' }}
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-xxl-6">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Create New Education</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    {{-- <p class="text-muted">Please fill form for user data.</p> --}}
                    <form action="{{ route('education.store') }}" class="needs-validation" method="POST" novalidate>
                        @csrf
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="institutionInput" class="form-label">Institution Name</label>
                            </div>
                            <div class="col-lg-9 position-relative">
                                <input type="text"
                                    class="form-control @error('institution') is-invalid
                                @enderror"
                                    id="institutionInput" placeholder="Enter your institution"
                                    value="{{ old('institution') }}" name="institution" autofocus>
                                @error('institution')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="field_of_studyInput" class="form-label">Field of Study</label>
                            </div>
                            <div class="col-lg-9 position-relative">
                                <input type="text"
                                    class="form-control @error('field_of_study') is-invalid
                                @enderror"
                                    id="field_of_studyInput" placeholder="Enter your field of study"
                                    value="{{ old('field_of_study') }}" name="field_of_study">
                                @error('field_of_study')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="degreeInput" class="form-label">Degree</label>
                            </div>
                            <div class="col-lg-9 position-relative">
                                <input type="text"
                                    class="form-control @error('degree') is-invalid
                                @enderror"
                                    id="degreeInput" placeholder="Enter your degree" value="{{ old('degree') }}"
                                    name="degree">
                                @error('degree')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="start_dateInput" class="form-label">Start Date</label>
                            </div>
                            <div class="col-lg-9 position-relative">
                                <input type="text"
                                    class="form-control @error('start_date') is-invalid
                                @enderror"
                                    id="start_dateInput" placeholder="MM-YYYY" value="{{ old('start_date') }}"
                                    name="start_date">
                                @error('start_date')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="end_dateInput" class="form-label">End Date</label>
                            </div>
                            <div class="col-lg-9 position-relative">
                                <input type="text"
                                    class="form-control @error('end_date') is-invalid
                                @enderror"
                                    id="end_dateInput" placeholder="MM-YYYY" value="{{ old('end_date') }}" name="end_date"
                                    {{ old('is_present') ? 'disabled' : '' }}>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" value="1" id="isPresentCheck"
                                        name="is_present" {{ old('is_present') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="isPresentCheck">
                                        Current Position
                                    </label>
                                </div>
                                @error('end_date')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="gradeInput" class="form-label">Grade</label>
                            </div>
                            <div class="col-lg-9 position-relative">
                                <input type="text"
                                    class="form-control @error('grade') is-invalid
                                @enderror"
                                    id="gradeInput" placeholder="Enter your grade" value="{{ old('grade') }}"
                                    name="grade">
                                @error('grade')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="descriptionInput" class="form-label">Description</label>
                            </div>
                            <div class="col-lg-9">
                                <textarea class="form-control" id="descriptionInput" rows="3" placeholder="Enter your description" name="address">{{ old('address') }}</textarea>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-2">Submit</button>
                            <button type="reset" class="btn btn-danger waves-effect waves-light">Reset</button>
                        </div>
                    </form>
                </div>
                {{-- <div class="card-body">
                    <form class="needs-validation" novalidate>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="inputName" class="form-label">Name</label>
                            </div>
                            <div class="col-lg-9 position-relative">
                                <input type="text"
                                    class="form-control @error('name') is-invalid
                                @enderror"
                                    id="inputName" value="{{ old('name') }}" placeholder="Enter your name" name="name"
                                    required>
                                @error('name')
                                    <div class="invalid-tooltip">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="emailInput" class="form-label">Email</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="email" class="form-control" id="emailInput" value="{{ old('email') }}"
                                    placeholder="Enter your email" name="email" required>
                                @error('email')
                                    <div class="invalid-tooltip">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 position-relative">
                            <label for="validationTooltip01" class="form-label">First name</label>
                            <input type="text" class="form-control" id="validationTooltip01" value="Mark">
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 position-relative">
                            <label for="validationTooltip02" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="validationTooltip02" value="Otto">
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 position-relative">
                            <label for="validationTooltipUsername" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                <input type="text" class="form-control" id="validationTooltipUsername"
                                    aria-describedby="validationTooltipUsernamePrepend">
                                <div class="invalid-tooltip">
                                    Please choose a unique and valid username.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 position-relative">
                            <label for="validationTooltip03" class="form-label">City</label>
                            <input type="text" class="form-control" id="validationTooltip03">
                            <div class="invalid-tooltip">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-md-3 position-relative">
                            <label for="validationTooltip04" class="form-label">State</label>
                            <select class="form-select" id="validationTooltip04">
                                <option selected disabled value="">Choose...</option>
                                <option>...</option>
                            </select>
                            <div class="invalid-tooltip">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-3 position-relative">
                            <label for="validationTooltip05" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="validationTooltip05">
                            <div class="invalid-tooltip">
                                Please provide a valid zip.
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>
                </div> --}}
            </div>
        </div>
    @endsection

    @push('scripts')
        {{-- JS --}}

        <script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>
        <script src="{{ URL::asset('assets/libs/cleave.js/cleave.js.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/app.min.js') }}"></script>

        <script>
            var startDate = new Cleave('#start_dateInput', {
                date: true,
                delimiter: '-',
                datePattern: ['m', 'Y']
            });
            var endDate = new Cleave('#end_dateInput', {
                date: true,
                delimiter: '-',
                datePattern: ['m', 'Y']
            });
        </script>

        <script>
            // Otomatis enable/disable end_date input
            document.addEventListener('DOMContentLoaded', function() {
                const presentCheck = document.getElementById('isPresentCheck');
                const endDateInput = document.getElementById('end_dateInput');
                presentCheck.addEventListener('change', function() {
                    endDateInput.disabled = this.checked;
                    if (this.checked) {
                        endDateInput.value = '';
                    }
                });
            });
        </script>
    @endpush
