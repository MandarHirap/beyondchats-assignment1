import axios from "axios";
import dotenv from "dotenv";

dotenv.config();

const BACKEND_URL = process.env.BACKEND_BASE_URL;

async function runWorker() {
  try {
    const article = {
      title: "AI is changing backend development",
      content: "AI tools are speeding up development workflows.",
      source: "BeyondChats Worker",
      published_at: new Date(),
    };

    const response = await axios.post(`${BACKEND_URL}/api/articles`, article);

    console.log("Article stored:", response.data);
  } catch (error) {
    console.error("Worker failed:", error.message);
  }
}

runWorker();
