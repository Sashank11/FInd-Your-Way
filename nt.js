var axios = require("axios").default;

var options = {
  method: 'GET',
  url: 'https://coronavirus-smartable.p.rapidapi.com/news/v1/US/',
  headers: {
    'x-rapidapi-host': 'coronavirus-smartable.p.rapidapi.com',
    'x-rapidapi-key': '711c388fcdmsh86f44dd06399244p1e9d4cjsn61a1f5527963'
  }
};

axios.request(options).then(function (response) {
	console.log(response.data);
}).catch(function (error) {
	console.error(error);
});