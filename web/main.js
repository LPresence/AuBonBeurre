const express = require('express');
const bodyParser = require('body-parser');
const mysql = require('mysql');
const path = require('path');
const app = express();
const automatonsRouter = require('./routes/automatons');
const router = require('./routes/router');

const port = 5000;


// create connection to database
// the mysql.createConnection function takes in a configuration object which contains host, user, password and the database name.
/**
 *  {
        host: '127.0.0.1',
        user: 'admin',
        password: 'admin',
        database: 'USINE_AU_BON_BEURRE_BDD'
    }
 */
const db = mysql.createConnection (
    {
        host: '54.38.240.160',
        user: 'automate_worker',
        password: 'Pksdj87Gtfucb',
        database: 'devops'
    }
);

db.connect((err) => {
    if (err) {
        throw err;
    }
    console.log('Connected to database');
});

global.db = db;

app.set('port', process.env.port || port); // set express to use this port
app.set('views', __dirname + '/assets/views'); // set express to look in this folder to render our view
app.use('/static', express.static(path.join(__dirname + '/assets/static')));
app.set('view engine', 'ejs'); // configure template engine
app.use(bodyParser.json()); // parse form data client

app.use('/', router)
app.use('/automatons', automatonsRouter)

app.listen(port, () => {
    console.log(`Server running on port: ${port}`);
});
