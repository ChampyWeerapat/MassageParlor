<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="css/laravel.css" rel="stylesheet">
    @extends('layouts.taghead')

    <link rel="stylesheet" type="text/css" href="css/bulma.css">
</head>

<body>
    @include('layouts._menubar')
    <div class="container" id="vue-app">
        <div v-if="isRegisterMode">
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
                        <h3 style="text-align:center">+ Add new massager</h3>
                        <div>
                            <div class="field">
                                <h4 class="title">Firstname</h4>
                                <p class="control">
                                    <input v-model="formGuests.firstname" class="input" type="text" />
                                </p>
                            </div>

                            <div class="field">
                                <h4 class="title">Lastname</h4>
                                <p class="control">
                                    <input v-model="formGuests.lastname" class="input" type="text" />
                                </p>
                            </div>

                            <div class="field">
                                <h4 class="title">Phone Number</h4>
                                <p class="control">
                                    <input v-model="formGuests.phone" class="input" type="text" />
                                </p>
                            </div>

                            <div class="has-text-centered">
                                <button class="button button is-white title" v-on:click="submitGuest()">Add Employee</button>
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
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Phone Number</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr v-for="student in students" v-if="student.isLive"> -->
                                    <tr v-for="(guest,index) in guests">
                                        <td> </td>
                                        <td> </td>
                                        <td>  </td>
                                        <td>  </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div v-if="!isRegisterMode">
            <div class="title">
                <br />
                <div class="columns">
                    <div class="column is-8">
                        <strong><h1>CATCH A REWARDS</h1></strong>
                    </div>
                    <div class="column is-2">
                        <a class="button is-link is-outlined is-fullwidth" href="#result">View Result</a>
                    </div>
                    <div class="column is-2">
                        <button class="button is-danger is-outlined is-fullwidth" v-on:click="newRound()">NEW ROUND</button>
                    </div>
                </div>
            </div>

            <div id="rewards">
                <div class="columns notification is-warning">

                    <div class="button box tile is-2" v-on:click="testclick()">
                        <article class="tile is-child">
                            <p class="subtitle">Books</p>
                            <figure class="image is-4by3">
                                <img src="img/book.png">
                            </figure>
                        </article>
                    </div>

                    <div class="button box tile is-2" v-on:click="testclick()">
                        <article class="tile is-child">
                            <p class="subtitle">Camera</p>
                            <figure class="image is-4by3">
                                <img src="img/camera.png">
                            </figure>
                        </article>
                    </div>

                    <div class="button box tile is-2" v-on:click="testclick()">
                        <article class="tile is-child">
                            <p class="subtitle">Cat</p>
                            <figure class="image is-4by3">
                                <img src="img/cat.png">
                            </figure>
                        </article>
                    </div>

                    <div class="button box tile is-2" v-on:click="testclick()">
                        <article class="tile is-child">
                            <p class="subtitle">Computer</p>
                            <figure class="image is-4by3">
                                <img src="img/computer.png">
                            </figure>
                        </article>
                    </div>

                    <div class="button box tile is-2" v-on:click="testclick()">
                        <article class="tile is-child">
                            <p class="subtitle">Dog</p>
                            <figure class="image is-4by3">
                                <img src="img/dog.png">
                            </figure>
                        </article>
                    </div>

                    <div class="button box tile is-2" v-on:click="testclick()">
                        <article class="tile is-child">
                            <p class="subtitle">Doll</p>
                            <figure class="image is-4by3">
                                <img src="img/doll.png">
                            </figure>
                        </article>
                    </div>

                </div>

                <div class="columns notification is-warning">
                    <div class="button box tile is-2" v-on:click="testclick()">
                        <article class="tile is-child">
                            <p class="subtitle">gameWii</p>
                            <figure class="image is-4by3">
                                <img src="img/gameWii.png">
                            </figure>
                        </article>
                    </div>

                    <div class="button box tile is-2" v-on:click="testclick()">
                        <article class="tile is-child">
                            <p class="subtitle">Headphone</p>
                            <figure class="image is-4by3">
                                <img src="img/headphone.png">
                            </figure>
                        </article>
                    </div>

                    <div class="button box tile is-2" v-on:click="testclick()">
                        <article class="tile is-child">
                            <p class="subtitle">Phone</p>
                            <figure class="image is-4by3">
                                <img src="img/phone.png">
                            </figure>
                        </article>
                    </div>

                    <div class="button box tile is-2" v-on:click="testclick()">
                        <article class="tile is-child">
                            <p class="subtitle">Pizza</p>
                            <figure class="image is-4by3">
                                <img src="img/pizza.png">
                            </figure>
                        </article>
                    </div>

                    <div class="button box tile is-2" v-on:click="testclick()">
                        <article class="tile is-child">
                            <p class="subtitle">TV</p>
                            <figure class="image is-4by3">
                                <img src="img/tv.png">
                            </figure>
                        </article>
                    </div>

                    <div class="button box tile is-2" v-on:click="testclick()">
                        <article class="tile is-child">
                            <p class="subtitle">Watch</p>
                            <figure class="image is-4by3">
                                <img src="img/watch.png">
                            </figure>
                        </article>
                    </div>

                </div>



            </div>
            <br><br>
            <hr>

            <div id="result">
                <p class="title">All Result</p>
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Phone Number</th>
                                <th>Reward</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <tr v-for="student in students" v-if="student.isLive"> -->
                            <tr >
                                <td> </td>
                                <td>  </td>
                                <td> </td>
                                <td> </td>
                                <td></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      </div>

    <script src="js/vue.js"></script>
    <script>
        var vm = new Vue({
            el: '#vue-app',
            data: {
                guests: [],
                formGuests: {
                    firstname: '',
                    lastname: '',
                    phone: '',
                    reward: ''

                },
                isRegisterMode: true
            },
            mounted: function() {
                this.guests.push({
                    firstname: 'Boonyaporn',
                    lastname: 'Narkumrussri',
                    phone: '095-558-5492'
                });
                this.guests.push({
                    firstname: 'Oranuch',
                    lastname: 'Chalearnnan',
                    phone: '099-999-9999'
                });
                this.guests.push({
                    firstname: 'Narumon',
                    lastname: 'Petsiri',
                    phone: '099-999-9999'
                });
                this.guests.push({
                    firstname: 'Kasemsak',
                    lastname: 'Choeithong',
                    phone: '099-999-9999'
                });
                this.guests.push({
                    firstname: 'Weerapat',
                    lastname: 'Karavee',
                    phone: '099-999-9999'
                });
            },
            filters: {
                toFullGender: function(value) {
                    var gender = "Unknown";
                    switch (value) {
                        case "M":
                            gender = "Male";
                            break;
                        case "F":
                            gender = "Female";
                            break;
                    }
                    return gender;
                }
            },
            computed: {
                fullname: function() {
                    return `Miss.${this.firstname} - ${this.lastname}`;
                }
            },
            methods: {
                submitGuest: function() {
                    if (this.formGuests.firstname.length > 2 &&
                        this.formGuests.lastname.length > 2) {
                        this.guests.push({
                            firstname: this.formGuests.firstname,
                            lastname: this.formGuests.lastname,
                            phone: this.formGuests.phone
                        });
                        this.clearformGuests();
                    } else {
                        alert('firstname or lastname is too short!');
                    }
                },
                clearformGuests: function() {
                    this.formGuests.firstname = '',
                        this.formGuests.lastname = '',
                        this.formGuests.phone = ''
                },
                pressStart: function() {
                    if (this.guests.length >= 5) {
                        this.isRegisterMode = false;
                    } else {
                        alert("need number of guests >= 5");
                    }
                },
                newRound: function() {
                    this.isRegisterMode = true;
                    this.clearformGuests();
                    this.guests = [];
                },
                testclick: function() {
                    alert("Reward");
                }

            }
        });
    </script>
</body>

</html>
