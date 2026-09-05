<div>
    <h1>Home</h1>
    <p>This is the home page.</p>
   <h3>
    <a href="{{ url('/test-route/about') }}">Go to About</a>
    <a href="{{ url('/test-route/welcome') }}">Go to Welcome</a>
    <a href="{{ url('/test-route/user') }}">Go to User</a>

    <a href="{{ url('/test-route/user/Deepesh') }}">Go to User with name</a>
    <!-- {{URL::current()}} -->
    <!-- or -->
     {{url()->current()}}

   </h3> 
    <h3>
        <!-- {{URL::full()}} -->
         <!-- or -->
        {{url()->full()}}
    </h3>
</div>