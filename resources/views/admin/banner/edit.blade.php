@extends('admin.layout.index')

@section('content')
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Banner</h6>
    </div>
    <div class="card-body">
        <?php
        if ($errors->all()) {
            echo '<div class="alert alert-danger" role="alert">';
            foreach ($errors->all() as $message) {
                echo $message . '<br>';
            }
            echo '</div>';
        }
        ?>
        <div class="table-responsive">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <fieldset class="form-group">
                    <div class="mb-3">
                        <label class="form-label">Can't change Banner itself. You have to delete it</label> <br>
                        <img src={{ $banner['name'] }} style="max-height: 200px; max-width: 700px;">
                    </div>
                    <div class="mb-3">
                        @if ($banner['url'] != '')
                            <label class="form-label">URL</label>
                            <input class="form-control" name="url" placeholder="https://amogus.png"
                                value="{{ $banner['url'] }}">
                        @else
                            <label class="form-label">Doesn't have an outside URL</label>
                        @endif
                    </div>
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" name="is_actived"
                         value="1" {{ $banner['is_actived'] == 1 ? 'checked' : true}}>
                        <label class="custom-control-label" for="customCheck1">
                            Is banner actived?
                        </label>
                    </div>
                </fieldset>
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </form>
        </div>
    </div>
@endsection
