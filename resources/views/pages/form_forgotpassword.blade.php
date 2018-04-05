@extends('master')
@section('content')

<div id="container">
    <div id="content">
        <div class="title"><h2>FORGOT PASSWORD</h2></div>
        <form action="" method="" id="">
            <div class="row">
                <div class="col-15">
                    <label for="fname">Email: </label>
                </div>
                <div class="col-85">
                    <input type="Email" id="email" name="email">
                </div>
            </div>
            <div class="row">
                <div class="col-15">
                    <label for="fname">Code: </label>
                </div>
                <div class="col-85">
                    <input type="text" id="code" name="code">
                </div>
            </div>
            <div class="row">
                <div class="col-15">
                    <label for="fname">New password: </label>
                </div>
                <div class="col-85">
                    <input type="password" id="new_password" name="new_password">
                </div>
            </div>
            <div class="row">
                <div class="col-15">
                    <label for="fname">Comfirm password: </label>
                </div>
                <div class="col-85">
                    <input type="password" id="comfirm_password" name="comfirm_password">
                </div>
            </div>
            <div class="row">
                <div class="col-85">
                    <input type="submit" value="submit">
                </div>
            </div>
        </form>
    </div> <!-- end content -->
</div>  <!-- end container -->

@endsection