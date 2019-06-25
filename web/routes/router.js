var express = require('express');
var router = express.Router();
//var fs      = require('fs');

router.get("", (req,res)=>{
    res.render('../views/index.ejs')
})

module.exports = router
