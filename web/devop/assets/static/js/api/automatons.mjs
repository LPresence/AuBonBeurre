import config from './config.mjs'
export default {
    
    getBy(payload){
        return new Promise((resolve, reject)=>{
        $.ajax({
            url: `${config.BASE_URL}${config.AUTOMATONS_URL}/getBy`,
            type: 'GET',
            data: payload,
            success: function(data) {
                console.log(`Automatons got by unit_id = ${payload.search}, returned : ${data}`);
                console.log(data)
                resolve(data)
            },
            error: function(err){
                console.log(err)
                reject(err)
            }
        });
    })
    },
}