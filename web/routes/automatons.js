let express = require('express');
let router = express.Router();
router.get('/getBy', (req, res) => {
    console.log(req.query.search)
    let query = "SELECT * FROM `donnees_automates` where id_unite = "+ req.query.search+" ORDER BY id desc LIMIT "+req.query.limit+";"; // get automatons by unit_id
        // execute
        db.query(query, (err, result)=>{
            if (err) {
                res.status(400).send(err)
            }
            res.status(200).send(result)
        });
    });
module.exports = router;
