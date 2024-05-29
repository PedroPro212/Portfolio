function calcularMedia(b1, b2){
    media = ((b1*2) + (b2*3)) / 5
    return media
}

function calcularFaltante(b1){
    var faltante =  b1 - 70
    return faltante
}

document.addEventListener('DOMContentLoaded', () => {
    
    var btn = document.querySelector('#btnCalcular')
    var lbl = document.getElementById('lblResult')

    btn.addEventListener('click', () => {
        var b1 = parseFloat(document.getElementById('txtB1').value)
        var b2 = parseFloat(document.getElementById('txtB2').value)   
        
        lbl.textContent = calcularMedia(b1, b2)
    })
})