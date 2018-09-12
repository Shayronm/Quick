<div class="container">
            
            <div class="w3_login">
                <div class="w3_login_module"><h3 class="w3l_fruit">Cadastrar produtos</h3>
                    <div class="module form-module">
                                                <?php echo form_open('ControllerProduto/gravarProduto');?>
                        <div class="form">
                        </div>
                        <div class="form">
                                <input class="form-control" type="text" name="nomeProduto" placeholder="Nome do produto" required=" ">
                                <input class="form-control" type="number" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" name="valorUnitario" placeholder="Valor unitario do produto" required=" ">
                                <br>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" name="descricaoProduto" placeholder="Descrição do produto"></textarea>
                                </div>
                                <input class="form-control" type="number" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" name="peso" placeholder="Peso do produto em kg ou litro" required=" ">
                                <br>
                                <input class="form-control" type="text" name="marca" placeholder="Marca" required=" ">
                                <select class="form-control" id="categoria" name="categoria">
                                    <option value="#">< Selecione uma categoria ></option>
                                    <optgroup label="Alimentação">
                                        <option value="arroz">Arroz</option>
                                        <option value="feijao">Feijão</option>
                                        <option value="sal">Sal</option>
                                        <option value="acucar">Açucar</option>
                                        <option value="massas">Massas</option>
                                        <option value="oleo">Oléo</option>
                                        <option value="laticinios">Laticínios</option>
                                        <option value="paes">Pães</option>
                                    <optgroup label="Frios">
                                        <option value="carnes">Carnes</option>
                                        <option value="aves">Aves</option>
                                        <option value="peixes">Peixes</option>
                                    <optgroup label="Hortifruti">
                                        <option value="vegetais">Vegetais</option>
                                        <option value="frutas">Frutas</option>
                                    <optgroup label="Bebidas">
                                        <option value="alcoolicas">Alcoólicas</option>
                                        <option value="naoalcoolicas">Não alcoólicas</option>
                                    <optgroup label="Outras">
                                        <option value="limpeza">Produtos de limpeza</option>
                                        <option value="higiene">Higiene</option>
                                        <option value="pet">Pet</option>
                                </select>
                                <br>
                                <input class="form-control" type="file" required name="imagem">
                                <br>
                                <input type="submit" value="Cadastrar">
                        </div>
                        <?php echo form_close();?>
                    </div>
                </div>
            </div></div>
<?php


