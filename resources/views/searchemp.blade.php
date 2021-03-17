@extends("theme")

@section("content")

    <div class="container">
    <center><h1><strong>Search Employee</strong></h1></center>
        <div class="row">
            <div class="col col-12 col-sm-3 col-md-3 col-lg-3"></div>
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
                <table class="table table-borderless">
                    <tr>
                        <td>Empcode</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-warning">Search</button></td>
                    </tr>    
                </table>
            </div>
            <div class="col col-12 col-sm-3 col-md-3 col-lg-3"></div>
        </div>
    </div>

@endsection
