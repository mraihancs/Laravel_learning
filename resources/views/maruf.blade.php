<h2>
   Welcome, {{$na ?? "Guest"}}
</h2>
@if (!$na == " "){
    echo "Name Not Found";
}

@else
{{$na}}
    

    
@endif