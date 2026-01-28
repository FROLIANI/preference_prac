<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Preferences Cards</title>
</head>
<body>

    <h2>Enter nunber  of Interviewees</h2>

    <form method="POST" action="{{ route('preferences.post') }}">
        @csrf

        <div class="mb-3">
            <label>Networking:</label>
            <input type="number" name="networking" required/>
        </div>


        <div class="mb-3">
            <label>Programming:</label>
            <input type="number" name="programming" required/>
        </div>

         <div class="mb-3">
            <label>System Administration:</label>
            <input type="number" name="system_admin" required/>
        </div>

        <button type="submit">Submit</button>
    </form>

    @if(isset($data))
    <h3>Result</h3>
    <p>Networking: {{$data['networking']}}</p>
     <p>Programming: {{$data['programming']}}</p>
      <p>System Administration: {{$data['system_admin']}}</p>

      <strong>Total Interviwees: {{$total}}</strong>

    @endif

</body>
</html>
