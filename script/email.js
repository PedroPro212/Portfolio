const express = require('express')
const nodemailer = require('nodemailer');
const app = express();

const port = 3000

const user = "0000888202@senaimgaluno.com.br";
const pass = "Pe212004ho";

app.get('/', (req, res) => res.send('Hello World'))

app.get('/send', (req, res) =>{
    
    const transporter = nodemailer.createTransport({
        host: "smtp.gmail.com",
        port: 465,
        auth: {
            user: user,
            pass: pass
        }
    });

    transporter.sendMail({
        from: user,
        to: user,
        replyTo: "pedrogamer212004@gmail.com",
        subject: "Olá, isso é um teste",
        text: "O email chegou?",
    })
    .then(info => {
        console.log(info);
        res.send(info);
    })
    .catch(error => {
        console.log(error);
        res.send(error);
    });
});

app.listen(port, () => console.log(`Servidor rodando na porta ${port}...`));