const express = require('express')
const bodyParser = require('body-parser');
const nodemailer = require('nodemailer');
const app = express();

const port = 5500

const user = "0000888202@senaimgaluno.com.br";
const pass = "Pe212004ho";

app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

app.post('/', (req, res) => res.send('Hello World'))

app.post('/send', (req, res) =>{
    
    const name = req.body.name;
    const email = req.body.email;
    const message = req.body.message;

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
        replyTo: email,
        subject: "Mensagem de " + name,
        text: message,
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