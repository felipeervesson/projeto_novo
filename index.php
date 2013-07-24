<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>projeto_novo</title>
        <style type="text/css">
             body {
                    margin:0px;
                    background-color: #cccccc;
                    font-family:"Trebuchet MS", Tahoma, Arial, Verdana;
                    font-size:12px;
                    color:#000;
            }

            #todo {
                    position: relative;
                    width: 750px;
                    border: 1px solid black;
                    margin:0px auto;
                    background-color: white;
            }

            #topo {
                    position: relative;
                    width: 746px;
                    height: 100px;
                    border: 2px solid red;
            }

            #meio {
                    position: relative;
                    width: 750px;
                    min-height: 400px;
                    background-color: #eeeeee;
            }

            #rodape {
                    width: 746px;
                    height: 75px;
                    border: 2px solid brown;
            }

           

            #miolo {
                    float: left;
                    width: 400px;
                    min-height: 400px;
                    border: 2px solid blue;
            }

            #direita {
                    float: right;
                    width: 150px;
                    min-height: 400px;
                    border: 2px solid yellow;
            }

            #menu {
                    width: 150px;
                    height: 400px;
            }

            .itemMenu {
                    width: 140px;
                    height: 21px;
                    background-color: lightyellow;
                    padding: 3px 0px 0px 10px;
                    border-bottom: 1px solid black;
            }

            #logo {
                    float: left;
                    width: 200px;
                    height: 100px;
                    text-align: center;
                    background-image: url(img1.GIF);
                    margin-right: 20px;
            }

            .secao_miolo {
                    width: 428px;
                    height: 150px;
                    text-align: center;
                    background-color: #cccccc;
                    margin: 2px 5px 4px 5px;
            }

            .secao_direita {
                    width: 140px;
                    height: 100px;
                    text-align: center;
                    background-color: #cccccc;
                    margin: 4px 5px 4px 5px;
            }

            #rodape_direita {
                    float: right;
                    width: 200px;
                    text-align: right;
                    margin: 5px 10px 0px 0px
            }

#rodape_direita a{color: #cc6600; text-decoration: none;}
#rodape_direita a:hover{color: #cc6600; text-decoration: underline;}   
        </style> 
    </head>
    <body>
      <div id="todo">
	<div id="topo">
		<div id="logo"><img src ="img1.gif"></div>
		MASTERS INFOR
	</div>  
        <div id="meio">
		<div id="miolo">
                     <fieldset class="password">
                        <legend> Autenticação </legend>
                        <label for="password">login: </label>
                        <input type="password" id="login"/></br>
                        <label for="Password">Senha:</label>
                        <input type="Password" id="Senha"/><br/><br/> 
                     </fieldset>
        <center><div><button name=”submit” type=”submit” onclick ="return validar()">Submeter</button></div></center>
        <center><div><button name=”submit” type=”submit” onclick ="return validar()">Cadastre Agora</button></div></center>
                </div>
        </div>
          <div id="rodape">
		<div id="rodape_direita">
			Rua Candido Martins dos Santos - N°603<br/>
			Parnamirim - RN - CEP: 59150-000<br/>
			Email: <a href="MastersInfor:suportemi@live.com">suportemi@live.com</a>
		</div>
	</div>
    </div>
    </body>
</html>






  





