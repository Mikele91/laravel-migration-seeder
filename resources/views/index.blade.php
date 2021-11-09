<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>databese viaggi</title>
</head>
<body>
    @foreach ($trips as $trip)
    
    <section>
        <div class="id">
            {{$trip['id']}}
        </div>
        <div class="code">
            {{$trip['code']}}
        </div>
        <div class="city">
            {{$trip['city']}}
        </div>
        <div class="state">
            {{$trip['state']}}
        </div>
        <div class="price">
            {{$trip['price']}}
        </div>
        <div class="description">
            {{$trip['description']}}
        </div>
        <div class="arrival">
            {{$trip['arrival']}}
        </div>
        <div class="departure">
            {{$trip['departure']}}
        </div>
        <div class="creato">
            {{$trip['created_at']}}
        </div>
        <div class="modificato">
            {{$trip['updated_at']}}
        </div>
        
    </section>
    @endforeach

</body>
</html>