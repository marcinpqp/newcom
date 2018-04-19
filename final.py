# import libraries
# import libraries
import urllib2
import csv
from datetime import datetime
from bs4 import BeautifulSoup
quote_page = 'http://api.nbp.pl/api/cenyzlota/2017-01-02/'
# query the website and return the html to the variable page
page = urllib2.urlopen(quote_page)
soup = BeautifulSoup(page, 'html.pareser')
# Take out the <div> of name and get its value
#name_box = soup.find(‘h1’, attrs={‘class’: ‘name’})
#name = name_box.text.strip() # strip() is used to remove starting and trailing
#print name
# get the index price
price_box = soup.find('Date', attrs={'tag':'Cena'})
Cena = price_box.text
print(Cena)

with open('index.csv', 'a') as csv_file:
 writer = csv.writer(csv_file)
 writer.writerow([Cena, datetime.now()])
