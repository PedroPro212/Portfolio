function calcularMedia(b1, b2){
    media = ((b1*2) + (b2*3)) / 5
    return media
}

function calcularFaltante(b1){
    var media = 70 * 5
    media - (b1 * 2)
    var faltante = media / 3
    return faltante
}

document.addEventListener('DOMContentLoaded', () => {
    
    var chc = document.getElementById('chcN2')

    chc.addEventListener('change', function(){
        var b1 = parseFloat(document.getElementById('txtB1').value)
        var b2 = document.getElementById('txtB2')
        var lbl = document.getElementById('lblResult')

        if(this.checked){
            b2.style.display = 'none'
            lbl.textContent = calcularFaltante(b1)
        }else{
            b2.style.display = 'block'

            var btn = document.querySelector('#btnCalcular')
            var lbl = document.getElementById('lblResult')
        
            btn.addEventListener('click', () => {
                var b1 = parseFloat(document.getElementById('txtB1').value)
                var b2 = parseFloat(document.getElementById('txtB2').value)   
        
                lbl.textContent = calcularMedia(b1, b2)
            })
        }
    })
})