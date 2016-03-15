<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">About Content.</div>

                    @if(isset($Location))
                        <p>Location is {{$Location}} on {{ date('M d, Y') }}</p>
                    @endif

                    @if(isset($Weather))
                        @if($Weather == 'sunny')
                            <p>It's a beautiful day.</p>
                        @elseif($Weather=='stormy')
                            <p>Bring your umbrella!</p>
                        @else
                            <p>No forecast available.</p>
                        @endif
                    @endif


                     @if(isset($theLandmarks))
                        <h3>Some Landmarks:</h3>
                        <ul style="text-align:left">
                        @foreach ($theLandmarks as $landmark)
                          @unless($landmark == 'Tinapa')
                            <li>{{$landmark}}</li>
                          @endunless
                        @endforeach
                     @endif
            </div>
        </div>
    </body>
</html>
