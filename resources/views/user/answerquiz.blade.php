@extends('layout');
@section('content')

    <div class="row">

        <div class="col s9 m9 left">

            <div class="col s3 m3">
                <div class="card-panel center">
                    <h4><strong>25</strong></h4>
                    <p class="grey-text darken-4"><strong>TOTAL</strong></p>
                </div>
            </div>
            <div class="col s3 m3">
                <div class="card-panel center">
                    <h4 class="green-text accent-4"><strong>3</strong></h4>
                    <p class="grey-text darken-4"><strong>CORRECT</strong></p>
                </div>
            </div>
            <div class="col s3 m3">
                <div class="card-panel center">
                    <h4 class="red-text lighten-2"><strong>5</strong></h4>
                    <p class="grey-text darken-4"><strong>WRONG</strong></p>
                </div>
            </div>
            <div class="col s3 m3">
                <div class="card-panel center">
                    <h4 class="blue-text lighten-2"><strong>17</strong></h4>
                    <p class="grey-text darken-4"><strong>LEFT</strong></p>
                </div>
            </div>

            <div class="col s12 m12">
                <form action="#">
                    <ul class="collection with-header">
                        <li class="collection-header">
                            <h4 class="left"><strong>#9</strong></h4>
                            <h4 class="quiz-title">Github command to deploy comits? </h4>
                        </li>
                        <li class="collection-item">
                            <p>
                                <input name="group1" type="radio" id="test1" />
                                <label for="test1" class="black-text">git push</label>
                            </p>
                        </li>
                        <li href="#" class="collection-item">
                            <p>
                                <input name="group1" type="radio" id="test2" />
                                <label for="test2" class="black-text">git commit -m "message"</label>
                            </p>
                        </li>
                        <li href="#" class="collection-item">
                            <p>
                                <input name="group1" type="radio" id="test3" />
                                <label for="test3" class="black-text">git pull</label>
                            </p>
                        </li>
                        <li href="#" class="collection-item">
                            <p>
                                <input name="group1" type="radio" id="test4" />
                                <label for="test4" class="black-text">git pull upstream</label>
                            </p>
                        </li>
                        <li class="collection-item blue-grey lighten-5">
                            <div>
                                <a class="btn white black-text" href="#">Skip</a>
                                <button class="secondary-content btn waves-effect waves-light" type="submit" name="action">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>

        </div>
        <div class="col s3 m3 right sidebar-right">
            <div class="sidebar-heading">
                <p class="grey-text darken-4"><strong>TIME LEFT</strong></p>
            </div>
            <div class="countdown">
                <p class=""><span class="h5 blue-text time-item">01</span> hrs <span class="h5 blue-text time-item">08</span> min <span class="h5 blue-text time-item">40</span> sec</p>
            </div>
            <div class="sidebar-heading">
                <p class="grey-text darken-4"><strong>PENDING</strong></p>
            </div>

            <ul class="collection">
                <li class="collection-item avatar">
                    <span class="btn btn-floating grey circle">#9</span>
                    <span class="title">Github command to deploy comits?</span>
                </li>
                <li class="collection-item avatar">
                    <span class="btn btn-floating grey circle">#10</span>
                    <span class="title">							What's the difference between private and public repos?</span>
                </li>
                <li class="collection-item avatar">
                    <span class="btn btn-floating grey circle">#11</span>
                    <span class="title">What is the purpose of a branch?</span>
                </li>
                <li class="collection-item avatar">
                    <span class="btn btn-floating grey circle">#12</span>
                    <span class="title">Final Question?</span>
                </li>
            </ul>

        </div>
    </div>


@stop