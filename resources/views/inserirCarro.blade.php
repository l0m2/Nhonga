<h2>Inserir Carro</h2>
<form class="modal-form">

   
        <label for="imagemCarro">Imagem do Carro</label>
        <input type="file" id="imagemCarro" name="imagemCarro" accept="image/*" />
<br>     
        <label for="marcaCarro">Marca</label>
        <select id="marcaCarro" name="marcaCarrp" required>
            <option value="Não definido" disabled selected>Selecione a marca</option>
            <option value="TOYOTA">TOYOTA</option>
            <option value="FORD">FORD</option>
            <option value="HONDA">HONDA</option>
            <option value="CHEVROLET">CHEVROLET</option>
            <option value="VOLKSWAGEN(VW)">VOLKSWAGEN(VW)</option>
            <option value="NISSAN">NISSAN</option>
            <option value="HYUNDAI">HYUNDAI</option>
            <option value="BMW">BMW</option>
            <option value="MERCEDES-BENZ">MERCEDES-BENZ</option>
            <option value="AUDI">AUDI</option>
            <option value="KIA">KIA</option>
            <option value="SUBARU">SUBARU</option>
            <option value="JEEP">JEEP</option>
            <option value="MAZDA">MAZDA</option>
            <option value="VOLVO">VOLVO</option>
            <option value="TOYOTA-LEXUS">TOYOTA-LEXUS</option>
            <option value="LAND ROVER">LAND ROVER</option>
            <option value="MITSUBISHI">MITSUBISHI</option>
            <option value="PEUGEOT">PEUGEOT</option>
            <option value="FIAT">FIAT</option>
            <option value="SUZUKI">SUZUKI</option>
            <option value="JAGUAR">JAGUAR</option>
            <option value="PORSCHE">PORSCHE</option>
            <option value="TESLA">TESLA</option>
            <option value="MINI">MINI</option>
            <option value="MAHINDRA">MAHINDRA</option>               
            <option value="ACURA">ACURA</option>
            <option value="CADILLAC">CADILLAC</option>
            <option value="BUICK">BUICK</option>   
            <option value="CHRYSLER">CHRYSLER</option>
            <option value="ASTON MARTIN">ASTON MARTIN</option>
            <option value="FERRARI">FERRARI</option>
            <option value="LAMBORGHINI">LAMBORGHINI</option>
            <option value="BUGATTI">BUGATTI</option>
            <option value="ROLLY-ROYCE">ROLLS-ROYCE</option>
            <option value="BENTLEY">BENTLEY</option>
            <option value="MCLAREN">MCLAREN</option>
            <option value="LOTUS">LOTUS</option>
            <option value="BE-GO">BE-GO</option>
            <option value="RENAULT">RENAULT</option>
        </select>    
  
        <label for="modeloCarro">Modelo</label>
        <input type="text" id="modeloCarro" name="modeloCarro" required />
    
        <label for="fabricanteCarro">Fabricante</label>
        <input type="text" id="fabricanteCarro" name="fabricanteCarro" />
   
        <label for="anoCarro">Ano</label>
        <input type="number" id="anoCarro" name="anoCarro" min="1900" max="2099" />
   
        <label for="corCarro">Cor</label>
        <select id="corCarro" name="corCarro">
            <option value="Não definida" disabled selected>Selecione a cor</option>
            <option value="Preto">Preto</option>
            <option value="Branco">Branco</option>   
            <option value="Prateado">Prateado</option>
            <option value="Dourado">Dourado</option>   
            <option value="Rosa">Rosa</option>
            <option value="Azul">Azul</option>   
            <option value="Vermelho">Vermelho</option>
            <option value="Verde">Verde</option>   
            <option value="Cinza">Cinza</option> 
            <option value="Roxo">Roxo</option>
            <option value="Laranja">Laranja</option>     
            <option value="Amarelo">Amarelo</option>
            <option value="Bronze">Bronze</option>   
            <option value="Vermelho metálico">Vermelho metálico</option>
            <option value="Azul metálico">Azul metálico</option>     
            <option value="Cinza metálico">Cinza metálico</option>
            <option value="Preto metálico">Preto metálico</option>          
        </select>
<br>     
        <label>Transmissão</label>
        <div class="radio-container">
            <input type="radio" id="transmissaoAutomatico" name="transmissaoCarro" value="Automático" checked />
            <label for="transmissaoAutomatico">Automático</label>
            <input type="radio" id="transmissaoManual" name="transmissaoCarro" value="Manual" />
            <label for="transmissaoManual">Manual</label>
        </div>
<br>         
        <label for="combustivelCarro">Combustível</label>
        <select id="combustivelCarro" name="combustivelCarro" required>
            <option value="Não definido" disabled selected>Selecione o combustível</option>
            <option value="Gasolina">Gasolina</option>
            <option value="Gasóleo">Gasóleo</option>
            <option value="Álcool">Álcool</option>
            <option value="GNV (Gás Natural Veicular)">GNV (Gás Natural Veicular)</option>
            <option value="Eletricidade">Eletricidade</option>
            <option value="Hidrogénio">Hidrogénio</option>
     
        </select>
 
        <label for="quilometragemCarro">Quilometragem</label>
        <input type="number" id="quilometragemCarro" name="quilometragemCarro" min="0" />
   
        <label for="potenciaCarro">Potência (CV)</label>
        <input type="number" id="potenciaCarro" name="potenciaCarro" min="1" />
         
<br>
            <label for="situacaoCarro">Situação</label>
            <div class="radio-container">
            <input type="radio" id="novoCarro" name="situacaoCarro" value="Novo" checked />
            <label for="novoCarro">Novo</label>
            <input type="radio" id="segundaMaoCarro" name="situacaoCarro" value="Segunda Mão" />
            <label for="segundaMaoCarro">Segunda Mão</label>
            </div>
<br>      

        <label for="precoCarro">Preço (MT)</label>
        <input type="number" id="precoCarro" name="precoCarro" step="0.01" required />

        <label for="descricaoCarro">Descrição</label>
        <textarea id="descricaoCarro" name="descricaoCarro" rows="5"></textarea>

    <button type="submit">Salvar</button>
  </form>
  