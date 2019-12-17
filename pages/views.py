from django.shortcuts import render
from pandas import read_csv

# Create your views here.

def index(request):
    common_sites_list = get_commonly_used_sites("/var/http/danetiska/pages/commonly_used_sites.tsv")
    context = {'commonly_used_sites':common_sites_list}
    return render(request, 'base.html', context)

def get_commonly_used_sites(filename):
    df = read_csv(filename, sep = "\t")
    titles = df["Title"]
    urls = df["URL"]
    images = df["Image File"]
    N = len(titles)

    return [{'title':titles[i], 'image':images[i], 'url':urls[i]} for i in range(0, N)]
