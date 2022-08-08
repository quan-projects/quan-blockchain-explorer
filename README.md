# THIS CODE WILL NO LONGER BE UPDATED BY US, WE RECOMMEND THAT NO ONE USE IT WITHOUT THE NECESSARY PROGRAMMING KNOWLEDGE TO UPDATE IT


# Nióbio Cash -Blockchain-Explorer
Block explorer for Nióbio Cash CryptoNote based cryptocurrency.

#### Installation

1) It takes data from daemon niobiod. It should be accessible from the Internet. Run niobiod with open port as follows:
```bash
./niobiod --restricted-rpc --enable-cors=* --enable-blockchain-indexes --rpc-bind-ip=0.0.0.0 --rpc-bind-port=8314
```
2) Just upload to your website and change 'api' variable in config.js to point to your daemon.
