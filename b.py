from telegram.ext import Updater, CommandHandler, MessageHandler, Filters
import os,json
from dotenv import load_dotenv
load_dotenv()
import threading

def texts(update, context):
              
              user_block=json.loads(update.message.to_json()).get("from").get("id")
              if str(user_block)=="5706327191":
               context.bot.delete_message(update.message.chat.id , update.message.message_id)
def echo(update, context):
    t = threading.Thread(target = texts,args = (update,context))
    t.start()
updater = Updater(str(os.getenv('TOKEN')))
dp = updater.dispatcher
print("بدء البوت بلعمل")
dp.add_handler(MessageHandler(Filters.command, echo))
dp.add_handler(MessageHandler(Filters.text, echo))
updater.start_polling()
updater.idle()
