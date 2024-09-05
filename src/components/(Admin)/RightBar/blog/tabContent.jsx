import styles from "@/components/(Admin)/RightBar/RightBar.module.scss";
import {UseForm} from "@/hooks/admin/useForm";
import {useState} from 'react';
import {Tab1, Tab2, Tab3} from "@/components/(Admin)/RightBar/blog/tabs";
import {updatePageData} from "@/utils/api/(admin)/post";
import {showSuccessAlert} from "@/hooks/admin/helpers";

const TabContent = ({data,activeTab}) => {
    const pageMeta = data?.pageData?.pageMeta;
    const pageID = data?.pageData?.id || false;
    const initialFormData = {
        meta: {
            'meta_description': pageMeta?.meta?.meta_description?.meta_value ?? '',
            'meta_keywords': pageMeta?.meta?.meta_keywords?.meta_value ?? '',
            'og_title': pageMeta?.meta?.og_title?.meta_value ?? '',
            'og_desc': pageMeta?.meta?.og_desc?.meta_value ?? '',
            'og_type': pageMeta?.meta?.og_type?.meta_value ?? '',
            'og_url': pageMeta?.meta?.og_url?.meta_value ?? '',
        },
        banner: {
            'banner_title': pageMeta?.banner?.banner_title?.meta_value ?? '',
            'banner_desc': pageMeta?.banner?.banner_desc?.meta_value ?? '',
        },
        sections: {
            'recent_news_ttile': pageMeta?.sections?.recent_news_ttile?.meta_value ?? '',
            'top_news_ttile': pageMeta?.sections?.top_news_ttile?.meta_value ?? '',
            'other_news_ttile': pageMeta?.sections?.other_news_ttile?.meta_value ?? '',
        },

    };
    
    const { formData, errorMessage, handleInputChange, handleSubmit } = UseForm(initialFormData);

    const [isSubmitting, setIsSubmitting] = useState(false);

    const onSubmit = async (formData) => {

        setIsSubmitting(true);

        try {
            const result = await updatePageData(pageID, formData);
            if(result.ok){
                showSuccessAlert(result.message);
            }
        } catch (error) {
            console.error('Error submitting data:', error);
        }
    };

    let tabContent;
    switch (activeTab) {
        case 'tab1':
            tabContent = <Tab1 formData={formData.meta} handleInputChange={handleInputChange} subType={`meta`} />;
            break;
        case 'tab2':
            tabContent = <Tab2 formData={formData.banner} handleInputChange={handleInputChange} subType={`banner`} />;
            break;
        case 'tab3':
            tabContent = <Tab3 formData={formData.sections} handleInputChange={handleInputChange} subType={`sections`} />;
            break;
        default:
            tabContent = null;
    }
    return (
        <>
            <div className={`${styles['admin-tabs-content']}`}>
                {tabContent}
            </div>
            <div className={styles['admin-btn-row']}>
                <button 
                    type="submit" 
                    className="btn-primary" 
                    onClick={(e) => handleSubmit(e, onSubmit)}
                    disabled={isSubmitting}
                >
                    {isSubmitting ? 'Processing...' : 'Apply changes'}
                </button>
            </div>
        </>

    );
}

export default TabContent