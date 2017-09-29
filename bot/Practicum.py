
# coding: utf-8

# In[9]:

import botometer

mashape_key = "uKUDX0gpUqmshZ4XfpfE2Kzh9kgSp1nqeCKjsnynmzOcFDF6lw"
twitter_app_auth = {
    'consumer_key': '8btgkkENoxJGVPFhuhzWg3QDz',
    'consumer_secret': 'ay88Z9Wqf7QFL6vDm1CLa7LpAt55EipE3ndoFlzslHuN25pfKW',
    'access_token': '1517890854-M3KSvLUrlT4pYKc5ftehmTuCS9ukRexYnIbg9rT',
    'access_token_secret': 'cYMY5Pehr2mKXdpmPn3K7J3xUI4Ifnfsssctdch8nsQv2',
  }
bom = botometer.Botometer(mashape_key=mashape_key, **twitter_app_auth)

# Check a single account
result = bom.check_account('@clayadavis')

# Check a sequence of accounts
#accounts = ['@clayadavis', '@onurvarol', '@jabawack']
#results = list(bom.check_accounts_in(accounts))


# In[10]:

print (result)


# In[ ]:



