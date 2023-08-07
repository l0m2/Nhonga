 
      <h2>Inserir Computador(PC)</h2>
      <form class="modal-form">

     
            <label for="imagemPc">Imagem do Computador</label>
            <input type="file" id="imagemPc" name="imagemPc" accept="image/*" />
<br>       
            <label for="marcaPc">Marca</label>
            <select id="marcaPc" name="marcaPc" required>
                <option value="Não definido" disabled selected>Selecione a marca</option>
                <option value="HP">HP</option>
                <option value="DELL">DELL</option>
                <option value="LENOVO">LENOVO</option>
                <option value="APPLE">APPLE</option>
                <option value="ASUS">ASUS</option>
                <option value="ACER">ACER</option>
                <option value="TOSHIBA">TOSHIBA</option>
                <option value="SONY">SONY</option>
                <option value="SAMSUNG">SAMSUNG</option>
                <option value="MSI">MSI</option>
                <option value="LG">LG</option>
                <option value="FUJITSU">FUJITSU</option>
                <option value="PANASONIC">PANASONIC</option>
                <option value="HUAWEI">HUAWEI</option>
                <option value="MICROSOFT(Surface)">MICROSOFT(Surface)</option>
                <option value="RAZER">RAZER</option>
            </select>
     
       
            <label for="modeloPc">Modelo</label>
            <input type="text" id="modeloPc" name="modeloPc" required />
     
            <label for="processadorPc">Processador</label>
            <input type="text" id="processadorPc" name="processadorPc" required />
       
            <label>Sistema Operacional</label>
            <div class="radio-container">
                <input type="radio" id="windowsPc" name="sistemaOperacionalPc" value="Windows" />
                <label for="windowsPc">Windows</label>
                <input type="radio" id="macosPc" name="sistemaOperacionalPc" value="macOS" />
                <label for="macosPc">macOS</label>
                <input type="radio" id="linuxPc" name="sistemaOperacionalPc" value="Linux" />
                <label for="linuxPc">Linux</label>
            </div>
<br>       
            <label for="geracaoPc">Geração</label>
            <input type="number" id="geracaoPc" name="geracaoPc" min="1" />
       
            <label for="capacidadeArmazenamentoPc">Capacidade de Armazenamento (GB)</label>
            <input type="number" id="capacidadeArmazenamentoPc" name="capacidadeArmazenamentoPc" min="1" />
       

            <label for="memoriaRamPc">Memória RAM (GB)</label>
            <input type="number" id="memoriaRamPc" name="memoriaRamPc" min="1" />
     

            <label for="portasUsbPc">Quantidade de Portas USB</label>
            <input type="number" id="portasUsbPc" name="portasUsbPc" min="0" />
       

            <label for="tamanhoTelaPc">Tamanho da Tela (polegadas)</label>
            <input type="number" id="tamanhoTelaPc" name="tamanhoTelaPc" step="0.01" />
      

            <label>Recursos</label>
            <div class="checkbox-container">
                <input type="checkbox" id="wifiPc" name="wifiPc" />
                <label for="wifiPc">Wi-Fi</label>
                <input type="checkbox" id="bluetoothPc" name="bluetoothPc" />
                <label for="bluetoothPc">Bluetooth</label>
                <input type="checkbox" id="webcamPc" name="webcamPc" />
                <label for="webcamPc">Webcam</label>
                <input type="checkbox" id="tecladoPc" name="tecladoPc" />
                <label for="tecladoPc">Teclado</label>
                <input type="checkbox" id="mousePc" name="mousePc" />
                <label for="mousePc">Mouse</label>
                <input type="checkbox" id="monitorPc" name="monitorPc" />
                <label for="monitorPc">Monitor</label>
            </div>
      
<br>
            <label for="situacaoPc">Situação</label>
            <div class="radio-container">
            <input type="radio" id="novoPc" name="situacaoPc" value="Novo" checked />
            <label for="novoPC">Novo</label>
            <input type="radio" id="segundaMaoPc" name="situacaoPc" value="Segunda Mão" />
            <label for="segundaMaoPc">Segunda Mão</label>
            </div>
<br>           

            <label for="precoPc">Preço (MT)</label>
            <input type="number" id="precoPc" name="precoPc" step="0.01" required />
       

            <label for="descricaoPc">Descrição</label>
            <textarea id="descricaoPc" name="descricaoPc" rows="5"></textarea>
    
        <button type="submit">Salvar</button>
      </form>