#!/usr/local/bin/ruby
require 'RMagick'

CATERING_URL = "http://www.utwente.nl/fb/diensten_abc/per_onderdeel/catering/"
DAYS_OF_WEEK = %w(maandag dinsdag woensdag donderdag vrijdag zaterdag zondag)

PDF_URL = "http://www.utwente.nl/fb/diensten_abc/per_onderdeel/catering/studentrestaurant/mensa-menu-week-%d-%d.pdf"

date = Time.now
week = date.strftime("%-V")
year = date.year

url = sprintf(PDF_URL, week, year)
pdf = Magick::ImageList.new(url)

pdf.each_with_index do |page_img, i|
  page_img.write "www/#{DAYS_OF_WEEK[i]}.png"
end
