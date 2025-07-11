*INSTALL AND SETUP CLOUDFLARED //
open the folder that contains the phishing site in terminal//
run the command  > php -S 127.0.0.1:8080//
if it started then open another terminal and we need to expose our site in internet for that we use cloudflared tunnel 
type in the command > cloudflared tunnel --url http://127.0.0.1:8080
the you should probably get an link for ur phishing site like this : https://cove-pace-polar-idea.trycloudflare.com  // and this is ur site done !


