@extends("admin::layouts.master");
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="d-flex justify-content-center align-items-center">
                    <h1>Add Category</h1>
                </div>
            </div>
        </section>
        <section class="content-main">
            <div class="container-fluid px-5">
                <form method="POST" action="{{route('admin.category.store')}}" id="store-category">
                    @csrf
                    <div class="form-group">
                        <label for="">Name (*)</label>
                        <input type="text" class="form-control" id="" placeholder="Enter name" name="name">
                    </div>
                    <div class="d-flex justify-contents-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
@section("extra-js")
    {!! JsValidator::formRequest('Modules\Admin\Http\Requests\StoreCategoryRequest', "#store-category") !!}

@endsection
