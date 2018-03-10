var BitcoinApp = React.createClass({
  
 getInitialState: function() {
   return {
     "USD": "",
   }
 },
  
  componentDidMount: function() {

    var th = this;
    this.serverRequest = 
      axios.get(this.props.source)
        .then(function(result) {    
          th.setState({
            USD: result.data.USD
          });
        })
  },
  
  componentWillUnmount: function() {
    this.serverRequest.abort();
  },
  
render: function() {
  return (
    <div className="text-center">
       <badge className="badge badge-pill badge-success p-2">1 BTC = ${this.state.USD} (USD)</badge>
    </div>
  )
 }
});

ReactDOM.render(<BitcoinApp source="https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=USD&e=Coinbase" />, document.querySelector("#btcPrice"));