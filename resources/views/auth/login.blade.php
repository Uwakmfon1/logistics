<x-guest>
    <form action="{{ route('login') }}" method="POST" class="background-white">
        @csrf 
       
        <label for="email">Email</label>
        <input type="email" id="email">

        <label for="password">Password</label>
        <input type="password" name="" id="password">

        <input type="submit" value="Submit">
    </form>

</x-guest>
