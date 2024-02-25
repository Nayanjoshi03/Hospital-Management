rfile=open("med_list.csv", "r")
wfile=open("query.txt","w")
lines=rfile.readlines()
try:
    for line in lines:
        i=line.split(',') 
        qur="INSERT INTO `products`(`Product_id`, `Product_name`, `Price`, `Product_type`, `Quantity`, `Images`) VALUES ('"+i[0]+"','"+i[1]+"','"+i[2]+"','"+i[3]+"','"+i[4]+"','"+i[5]+"')"
        print(qur)
        wfile.write(qur+"\n")
except Exception: 
    pass
        
finally:
    wfile.close()
    rfile.close()
        