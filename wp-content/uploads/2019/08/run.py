import requests
import bs4

URL = "https://pybit.es/pages/projects.html"

def pull_site():
    raw_site_page = requests.get(URL)
    raw_site_page.raise_for_status()
    return raw_site_page

def scrape(site):
    header_list = []

    soup = bs4.BeautifulSoup(site.text, "html.parser")
    html_header_list = soup.prettify().select(".projectHeader")

    for head in html_header_list:
        header_list.append(head.getText())

    for header in header_list:
        print(header)

# This indicates that the file is the main executable file, starting point.
if __name__ == "__main__":
    site = pull_site()
    scrape(site)
