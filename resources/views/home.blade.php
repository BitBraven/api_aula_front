<html>
  <head>
    <title>Create Pessoa</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <style>
      html, body {
      display: flex;
      justify-content: center;
      height: 100%;
      }
      div, h1, form, input, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #ffffff
      }
      body { 
      background: #252526;
      }
      input { 
      color: #252526;
      }
      h1 {
      padding: 10px 0;
      font-size: 32px;
      font-weight: 300;
      text-align: center;
      text-shadow: 1px 2px 5px rgba(0,0,0,.64); 
      }
      p {
      font-size: 12px;
      text-shadow: 1px 2px 5px rgba(0,0,0,.64); 
      }
      hr {
      color: #a9a9a9;
      opacity: 0.3;
      }
      .main-block {
      max-width: 340; 
      min-height: 260; 
      padding: 10px 0;
      margin: auto;
      border-radius: 10px; 
      border: solid 1px #5b5b5b;
      box-shadow: 1px 2px 5px rgba(0,0,0,.64); 
      background: #3b3b3b; 
      }
      form {
      margin: auto;
      }
      label#icon {
      margin: 0 5;
      border-radius: 5px 0 0 5px;
      }
      input[type=text] {
      width: calc(100% - 57px);
      height: 36px;
      margin: 13px 0 0 -10px;
      padding-left: 10px; 
      border-radius: 0 5px 5px 0;
      border: solid 1px #cbc9c9; 
      box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
      background: #fff; 
      }
      #icon {
      display: inline-block;
      padding: 9.3px 15px;
      box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
      background: #1c87c9;
      color: #fff;
      text-align: center;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: calc(100% - 50%);
      padding: 10px 0;
      margin: 10px auto;
      border-radius: 5px; 
      border: none;
      background: #1c87c9; 
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      text-shadow: 1px 2px 5px rgba(0,0,0,.64); 
      }
      button:hover {
      background: #26a9e0;
      }
    </style>
  </head>
</html>
<table>
    @foreach ($pessoas as $pessoa)

        <tr>
            <td>{{ $pessoa['nome'] }}</td>        
            <td>{{$pessoa['id']}} - {{ $pessoa['nome'] }}</td>  
            <td>{{ $pessoa['email'] }}</td>       
        </tr>
    @endforeach
</table>
</table>


<form action="/" method="POST">

    @csrf
    <div class="main-block">
      <h1>Cadastro</h1>
      <label id="icon" for="name"><i class="fas fa-user"></i></label>
      <input id="nome" type="text" name="nome" placeholder="Nome"/><br />
      <label id="icon" for="name"><i class="fas fa-envelope"></i></label>
      <input id="email" type="text" name="email" placeholder="Email"/><br />
      <label id="icon" for="name"><i class="fas fa-phone"></i></label>
      <input id="telefone" type="text" name="telefone" placeholder="Telefone"/><br />
        <div class="btn-block">
          <p>Ao clicar em "Enviar", você concorda que o serviço provavalmente não irá funcionar.</p>
          <button type="submit" value="enviar">Submit</button>
        </div>
    </div>
</form>