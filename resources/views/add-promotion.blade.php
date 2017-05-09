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
                        <strong><h1>ADD PROMOTIONS</h1></strong>
                    </div>
                </div>

            </div>

            <div class="tile is-ancestor">
                <div class="tile is-4 is-vertical is-parent">
                    <div class="tile is-child box notification " style="background-color:#EEB740;">
                        <!-- <h3 style="text-align:center">+ Add new massager</h3> -->
                        <div>
                            <div class="field">
                                <h4 class="title">Promotion Name</h4>
                                <p class="control">
                                    <input v-model="" class="input" type="text" />
                                </p>
                            </div>

                            <div class="field">
                                <h4 class="title">Duration Hours</h4>
                                <p class="control">
                                    <input v-model="" class="input" type="text" />
                                </p>
                            </div>

                            <div class="field">
                                <h4 class="title">Price</h4>
                                <p class="control">
                                    <input v-model="" class="input" type="text" />
                                </p>
                            </div>

                            <div class="field">
                                <h4 class="title">Extra points</h4>
                                <p class="control">
                                    <input v-model="" class="input" type="text" />
                                </p>
                            </div>


                            <div class="field">
                                <h4 class="title">Picture</h4>
                                <p class="control">
                                    <input v-model="" class="input" type="text" />
                                </p>
                            </div>

                            <div class="has-text-centered">
                                <button class="button button is-white title" v-on:click="submitGuest()">Add Promotion</button>
                            </div>

                            <hr>

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
                                        <th>Hours</th>
                                        <th>Price</th>
                                        <th>Extra points</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr v-for="student in students" v-if="student.isLive"> -->
                                    <tr v-for="(guest,index) in guests">
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>

                                    </tr>

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
