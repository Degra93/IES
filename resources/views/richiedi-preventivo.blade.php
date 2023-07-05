<x-main>
    
    <div>
      <form method="POST" action="{{route('request-quote')}}" enctype="multipart/form-data">
        @csrf
        <label for="email">inseriscia la tua email</label>
 
    <input id="email" type="email" name="email" class="@error('email') is-invalid @else is-valid @enderror" placeholder="email@example.com" title="sendmetoo" value="{{old('title')}}" maxlength="150" required>
    <label for="sendmetoo">inviami copia della richiesta</label>
    <input type="checkbox" id="sendmetoo" name="sendmetoo" title="sendmetoo">
    <button type="submit" id="submitButton">Richiedi</button>
        
      </form>
        
    
    </div>
    
    
</x-main>