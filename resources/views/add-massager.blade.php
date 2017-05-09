<!DOCTYPE html>
<html>

<head>
    <link href="css/laravel.css" rel="stylesheet">
    @extends('layouts.taghead')
    <link rel="stylesheet" type="text/css" href="css/bulma.css">
</head>

<body>
    
    @include('layouts._menubar')
    <div class="container" id="vue-app">
        <div>
            <div class="title">
                <br />
                <div class="columns">
                    <div class="column is-10" style="margin-top:25px">
                        <strong><h1>ADD MASSAGER</h1></strong>
                    </div>
                </div>

            </div>

            <div class="tile is-ancestor">
                <div class="tile is-4 is-vertical is-parent">
                    <div class="tile is-child box notification " style="background-color:#EEB740;">
                        <!-- <h3 style="text-align:center">+ Add new massager</h3> -->
                        <div>
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <div class="field">
                                <h4 class="title">Firstname</h4>
                                <p class="control">
                                    <input v-model="formGuests.firstname" class="input" type="text" id="fname" name="fname"/>
                                </p>
                            </div>

                            <div class="field">
                                <h4 class="title">Lastname</h4>
                                <p class="control">
                                    <input v-model="formGuests.lastname" class="input" type="text" id="lname" name="lname"/>
                                </p>
                            </div>

                            <div class="field">
                                <h4 class="title">Picture</h4>
                                <!-- picture -->
                                <!-- <p class="control">
                                    <input v-model="" class="input" type="text" />
                                </p> -->
                                <input type="file" name="fileToUpload" id="fileToUpload">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </div>

                            <div class="has-text-centered">
                                <button class="button button is-white title" type='submit' id='submit' name='submit'>Add Employee</button>
                            </div>

                            <hr>
                        </form>
                        </div>
                    </div>
                </div>
                <div class="tile is-parent">
                    <div class="tile is-child box">
                        <h2 class="title" style="text-align:center"><b>All Massager</b></h2>
                        <div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr v-for="student in students" v-if="student.isLive"> -->
                                    @foreach ($mas as $x)
                                    <tr>
                                        <td>{{$x->id}}</td>
                                        <td>{{$x->name}}</td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      </div>

      @include('layouts._footer')

    <script src="js/vue.js"></script>

</body>

</html>
