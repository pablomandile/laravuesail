@if ($message = Session::get('success'))
    
    <div style="padding: 1px; background-color: green; color:white">
        <h3>
            <p style="margin:10px;">{{ $message }}</p>
        </h3>
        
    </div>

@endif

@if ($message = Session::get('danger'))

    <div style="padding: 1px; background-color: red; color:white">
        <h3>
            <p style="margin:10px;">{{ $message }}</p>
        </h3> 
    </div>

@endif
